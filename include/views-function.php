<?php
// Количество просмотров страницы

add_action('wp_head', 'all4site_postviews');
function all4site_postviews()
{

/* ------------ Настройки -------------- */
$meta_key = 'views'; // Ключ мета поля, куда будет записываться количество просмотров.
$who_count = 1; // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
$exclude_bots = 1; // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да,
// исключить из подсчета.

global $user_ID, $post;
if (is_singular()) {
$id = (int) $post->ID;
static $post_views = false;
if ($post_views) {
return true;
}
// чтобы 1 раз за поток
$post_views = (int) get_post_meta($id, $meta_key, true);
$should_count = false;
switch ((int) $who_count) {
case 0:$should_count = true;
break;
case 1:
if ((int) $user_ID == 0) {
$should_count = true;
}

break;
case 2:
if ((int) $user_ID > 0) {
$should_count = true;
}

break;
}
if ((int) $exclude_bots == 1 && $should_count) {
$useragent = $_SERVER['HTTP_USER_AGENT'];
$notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
$bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
if (!preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent)) {
$should_count = false;
}

}

if ($should_count) {
if (!update_post_meta($id, $meta_key, ($post_views + 1))) {
add_post_meta($id, $meta_key, 1, true);
}
}

}
return true;
}

// Добавляем произвольное поле в админку

add_filter('manage_post_posts_columns', 'add_views_column', 4);
function add_views_column($columns)
{
$num = 2; // после какой по счету колонки вставлять новые

$new_columns = array(
'views' => 'Просмотры',
);

return array_slice($columns, 0, $num) + $new_columns + array_slice($columns, $num);
}

function price_column_display($column_name, $post_id)
{
if ('views' != $column_name) {
return;
}

$price = get_post_meta($post_id, 'views', true);
if (!$price) {
$price = '<em>' . __('отсутствует', 'my-plugin') . '</em>';
}

echo $price;
}
add_action('manage_posts_custom_column', 'price_column_display', 5, 2);

?>