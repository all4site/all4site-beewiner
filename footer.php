<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package all4site
 */

?>

 <div class="fullFooter">
    <div class="wrapper">
      <div class="footerTop grid">
        <div class="menu grid">
          <h5>menu</h5>
					<?php wp_nav_menu(array(
					'theme_location'  => 'menu_bottom',
					'menu'						=>	'Нижнее меню',
					'container'				=>	false,
					'menu_class'			=>	'',
					'menu_id'					=>	'',
				)); ?>

        </div>
        <div class="feedback grid">
          <h5>записаться на консультацию</h5>
          <form action="mail.php" method="POST" id="form" class="grid">
            <input type="hidden" name="project_name" value="Форма оботной связи PavlikGovor"/>
            <input type="hidden" name="admin_email" value="all4sitecomua@gmail.com"/>
            <input type="hidden" name="form_subject" value="TEST"/>
            <input name="name" type="text" class="grid"/>
            <label class="grid">имя</label>
            <input type="text" name="email" class="grid"/>
            <label class="grid">email</label>
            <textarea name="somText" cols="30" rows="10" class="grid"></textarea>
            <input type="submit" value="ОТПРАВИТЬ" class="btn"/>
          </form>
        </div>
        <div class="work grid">
          <h5>график работы</h5>
          <ul>
            <li><?php echo get_theme_mod(footer_work_mn) ?></li>
            <li><?php echo get_theme_mod(footer_work_tu) ?></li>
            <li><?php echo get_theme_mod(footer_work_we) ?></li>
            <li><?php echo get_theme_mod(footer_work_th) ?></li>
            <li><?php echo get_theme_mod(footer_work_fr) ?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footerBottom grid"></div>

<?php wp_footer(); ?>

</body>
</html>
