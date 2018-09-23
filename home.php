<?php

// template name: blog
get_header();

?>
<div class="wrapper">
	<div class="blogPage">
		<div class="accordeon blogAccordeon">
			<div class="topAccordeon">
				<h4>популярные</h4>
			</div>
			<div class="bottomAccordeon popular"><span>Curabitur aliquet</span><span>Curabitur aliquet</span><span>Curabitur
					aliquet</span></div>
			<div class="topAccordeon">
				<h4>рубрики</h4>
			</div>
			<div class="bottomAccordeon headings"><span>Curabitur aliquet</span><span>1</span><span>Curabitur aliquet</span><span>2</span><span>Curabitur
					aliquet</span><span>3</span><span>Curabitur aliquet</span><span>4</span><span>Curabitur aliquet</span><span>5</span></div>
			<div class="topAccordeon">
				<h4>рекомендуемые</h4>
			</div>
			<div class="bottomAccordeon recomended">
				<div class="recomendedBloc"><img src="img/recom1.png" alt="" />
					<p>Pellentesque in ipsum</p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus
						nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna
						dictum porta.</span>
					<div class="more"><span>подробнее...</span></div>
				</div>
				<div class="recomendedBloc"><img src="img/recom2.png" alt="" />
					<p>Pellentesque in ipsum</p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus
						nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna
						dictum porta.</span>
					<div class="more"><span>подробнее...</span></div>
				</div>
				<div class="recomendedBloc"><img src="img/recom2.png" alt="" />
					<p>Pellentesque in ipsum</p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus
						nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna
						dictum porta.</span>
					<div class="more"><span>подробнее...</span></div>
				</div>
			</div>
		</div>
		<div class="blogContent">
			<?php
					$posts = get_posts(array(
					'numberposts' => 3,
					// 'order'=> 'ASC',
					'exclude' => '63, 42'
					));
					foreach ($posts as $post) {
					setup_postdata($post);
					?>
					<?php
					//должно находится внутри цикла
					if( has_post_thumbnail() ) {
					}
					else {
						echo '<img src="'.get_template_directory_uri().'/img/noImg.png" />';
					}
					?>
			<div class="blogInside">
				<?php the_post_thumbnail();?>

				<h4>
					<?php the_title();?>
				</h4>
				<p>
					<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, '...');?>
				</p>
				<a href="<?php the_permalink();?>" class="more"><span>подробнее...</span></a>
			</div>
			<?php
					}
					wp_reset_postdata();
				?>
		</div>
		<div class="categoryBloc">
			<div class="categoryContentWrapper">
				<div class="popular grid">
					<h4>популярные</h4>
						<?php
								$posts = get_posts(array(
								'numberposts' => 3,
								'meta_key' => 'views',
								'orderby' => 'meta_value_num',
								'exclude' => '63, 42'
								));
								foreach ($posts as $post) {
								setup_postdata($post);
								?>

							<span>
								<a href="<?php the_permalink();?>"><?php $theTitle = esc_html (get_the_title());echo mb_strimwidth($theTitle, 0, 20, '...');?></a>
							</span>
						<?php
								}
								wp_reset_postdata();
							?>
				</div>
				<div class="headings grid">
					<h4>рубрики</h4>
						<?php
							$categories = get_categories(array(
							'orderby' => 'name',
							'order' => 'DESC',
							'include' => '4,3,7,6,5',
							));
						foreach ($categories as $category) {
						?>
							<a href="<?php echo get_category_link($category->term_id); ?>"><span><?php echo $category->name; ?></span></a>
							<span class="count"><?php echo $category->category_count; ?></span>
						<?php
						}
						?>
				</div>
				<div class="recomended grid">
					<h4>рекомендуемые</h4>
					<div class="recomendedBloc"><img src="img/recom1.png" alt="" />
						<p>Pellentesque in ipsum</p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus
							nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna
							dictum porta.</span>
						<div class="more"><span>подробнее...</span></div>
					</div>
					<div class="recomendedBloc"><img src="img/recom2.png" alt="" />
						<p>Pellentesque in ipsum</p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus
							nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna
							dictum porta.</span>
						<div class="more"><span>подробнее...</span></div>
					</div>
					<div class="recomendedBloc"><img src="img/recom3.png" alt="" />
						<p>Pellentesque in ipsum</p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus
							nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna
							dictum porta.</span>
						<div class="more"><span>подробнее...</span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="pagination"><img src="img/left.svg" alt="" /><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>...</span><img
			 src="img/right.svg" alt="" /></div>
	</div>
</div>
<?php
get_footer();