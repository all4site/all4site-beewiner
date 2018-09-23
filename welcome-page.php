<?php
/*
Template Name: welcome
Template Post Type: post
 */

?>
<?php
get_header();
?>
		<?php
while (have_posts()):
    the_post();

    ?>
	<div class="wrapper">
			<div class="welcomeAbout grid"><?php the_post_thumbnail() ?>

	      <h2><?php the_title();?></h2>
				<?php the_content();?>
	      </div>
		</div>
			<?php endwhile;?>


  <div class="fullImg welcomeBg"><span>just do it and be</span><br/><span>a winner in your life!</span></div>
  <div class="wrapper">
    <h2>тебе может понравиться</h2>
    <div class="treningBlock grid">
      <div class="blogTreningBlock grid">
        <h4>blog</h4>
        <div class="sliderBlog grid">

			<?php

global $post;
$args = array('category_name' => 'slajder');
$myposts = get_posts($args);
foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
				<div class="img"><?php the_post_thumbnail();?>
            <div class="text">
              <p><?php the_title();?></p>
						<span><?php $content = get_the_content();
    echo mb_strimwidth($content, 0, 200, '...');?></span>
						<a href="<?php the_permalink();?>" class="more"><span>подробнее...</span></a>
            </div>
          </div>
				<?php
}
wp_reset_postdata();
?>
</div>
</div>

      <div class="hr grid"></div>
      <div class="treningTreningBlock grid">
        <h4>тренинги</h4>
        <div class="sliderTrening grid">
      	<?php

global $post;
$args = array('category_name' => 'slajder');
$myposts = get_posts($args);
foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
				<div class="img"><?php the_post_thumbnail();?>
            <div class="text">
              <p><?php the_title();?></p>
						<span><?php $content = get_the_content();
    echo mb_strimwidth($content, 0, 200, '...');?></span>
						<a href="<?php the_permalink();?>" class="more"><span>подробнее...</span></a>
            </div>
          </div>
				<?php
}
wp_reset_postdata();
?>
        </div>
			</div>
</div>
    </div>
  </div>
<?php
get_sidebar();
get_footer();