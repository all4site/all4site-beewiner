<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package all4site
 */

get_header(home);
?>
  <div class="searchWrapper">
    <div class="hamburger hamburger--slider is-active">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
    <div class="search">
     <?php get_search_form(); ?>
    </div>
  </div>
 <div class="headerMain grid" style="background: url('<?php echo get_theme_mod(header_main); ?>');">
		<div class="aboutHeaderMain grid">
			<div class="smallMenuWrapper">
				<div class="smallMenu">
					<div class="text"><span>menu</span></div>
					<div class="hamburger hamburger--slider">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
					<div class="smallMenuBox">
						<a href="<?php echo get_theme_mod(social_facebook);?>"><div class="fab fa-facebook-f z-depth-2"></div></a>
						<a href="<?php echo get_theme_mod(social_youtube);?>"><div class="fab fa-youtube z-depth-2"></div></a>
						<a href="<?php echo get_theme_mod(social_instagram);?>"><div class="fab fa-instagram z-depth-2"></div></a>
						<a href="#!"><div class="fas fa-search z-depth-2"></div></a>

					</div>
				</div>
			</div>
			<div class="smallMenuShow">
				<div class="smallMenuShowWrapper">
					<div class="hamburger hamburger--slider is-active">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div><span>menu</span>
					<?php wp_nav_menu(array(
					'menu'						=>	'Главное',
					'container'				=>	false,
					'menu_class'			=>	'grid',
					'menu_id'					=>	'',
				)); ?>

					<div class="smallMenuShowBox">
						<a class="circle" href="<?php echo get_theme_mod(social_facebook);?>">
							<div class="fab fa-facebook-f"></div>
						</a>
						<a class="circle" href="<?php echo get_theme_mod(social_youtube);?>">
							<div class="fab fa-youtube"></div>
						</a>
						<a class="circle" href="<?php echo get_theme_mod(social_instagram);?>">
							<div class="fab fa-instagram"></div>
						</a>
						<a class="circle" href="http://google.com.ua">
							<div class="fas fa-search"></div>
						</a>
					</div>
				</div>
			</div>
			<div class="logoAbout grid"><img src="<?php echo get_theme_mod(header_logo_about); ?>" alt=""/></div>
			<div class="infoAbout grid">
			<span><?php echo get_theme_mod(top_header_small_text); ?></span>
			<span>тел: <?php echo get_theme_mod(top_header_phone); ?></span>
			<span>email: <?php echo get_theme_mod(top_header_email); ?></span></div>
			<div class="textAbout grid">
				<div class="textAboutBlock">
					<div class="fas fa-spinner fa-spin"></div>
					<h4><?php echo get_theme_mod(top_header_big_text_one); ?></h4>
				</div>
				<div class="textAboutBlock">
					<div class="fas fa-spinner fa-spin"></div>
					<h4><?php echo get_theme_mod(top_header_big_text_two); ?></h4>
				</div>
				<div class="textAboutBlock">
					<div class="fas fa-spinner fa-spin"></div>
					<h4><?php echo get_theme_mod(top_header_big_text_tree); ?></h4>
				</div>
			</div>
		</div>
	</div>
	<div class="fullWelcome">
		<div class="wrapper">
			<div class="welcome grid">
				<?php
					global $post;
					$args = array('category_name' => 'home-top');
					$myposts = get_posts($args);
				foreach ($myposts as $post) {
					setup_postdata($post);
				?>
				<div class="imgWelcome"><?php the_post_thumbnail();?></div>
				<div class="textWelcome">
				<h2><?php the_title();?></h2>
				<?php the_excerpt();?>
				<a class="more" href="<?php the_permalink();?>"><span>подробнее...</span></a>
				<?php
				}
				wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">

		<div class="blog grid">
		<a href="#!" class="item grid"><h4>blog</h4></a>
			<?php
				$categories = get_categories(array(
				'orderby' => 'name',
				'order' => 'DESC',
				'include' => '4,3,7,6,5',
				));
			foreach ($categories as $category) {
			?>
				<a class="item grid z-depth-2" href="<?php echo get_category_link($category->term_id); ?>"><h4><?php echo $category->name; ?></h4></a>
			<?php
			}
			?>
		</div>

<div class="aboutProgect grid">
		<?php
		global $post;
		$args = array('category_name' => 'home-about-progect');
		$myposts = get_posts($args);
		foreach ($myposts as $post) {
				setup_postdata($post);
				?>
		<h2><?php the_title();?></h2>

		<?php the_excerpt();?>
		<a class="more" href="<?php the_permalink();?>"><span>подробнее...</span></a>

		<?php
		}
		wp_reset_postdata();
		?>
</div>
	</div>
	<div class="fullImg"><span><?php echo get_theme_mod(header_main_justdoit) ?></span><br/><span><?php echo get_theme_mod(header_main_bewinner) ?></span></div>
	<div class="wrapper">
		<div class="gift grid">
			<div class="iconGift grid">
				<div class="fas fa-gift"></div>
			</div>
			<div class="giftHeader">
				<h2><?php echo get_theme_mod(header_gift_h1) ?></h2>
			</div>
			<div class="giftBottom"><span><?php echo get_theme_mod(header_gift_span_1) ?></span><br/><span><?php echo get_theme_mod(header_gift_span_2) ?></span><br/><span><?php echo get_theme_mod(header_gift_span_3) ?></span></div><a href="#!" class="btn pulse">хочу</a>
		</div>
	</div>
	<div class="wrapper">
		<h2>тренинги</h2>
		<div class="trenings grid">
			<div class="box grid">
				<div class="boxInside grid">
					<h4><?php echo get_theme_mod(header_course_one_h1) ?></h4>
					<div class="<?php echo get_theme_mod(header_course_one_icon) ?>"></div><span><?php echo get_theme_mod(header_course_one_text) ?></span><a href="<?php echo get_theme_mod(header_course_one_button) ?>" class="btn">подробнее</a>
				</div>
			</div>
			<div class="box grid">
				<div class="boxInside grid">
				<h4><?php echo get_theme_mod(header_course_two_h1) ?></h4>
					<div class="<?php echo get_theme_mod(header_course_two_icon) ?>"></div><span><?php echo get_theme_mod(header_course_two_text) ?></span><a href="<?php echo get_theme_mod(header_course_two_button) ?>" class="btn">подробнее</a>
				</div>
			</div>
			<div class="box grid">
				<div class="boxInside grid">
				<h4><?php echo get_theme_mod(header_course_three_h1) ?></h4>
					<div class="<?php echo get_theme_mod(header_course_three_icon) ?>"></div><span><?php echo get_theme_mod(header_course_three_text) ?></span><a href="<?php echo get_theme_mod(header_course_three_button) ?>" class="btn">подробнее</a>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
