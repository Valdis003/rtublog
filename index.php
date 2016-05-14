<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo();?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<?php get_header(); ?>	
		<div class="content">
		<!-- <?php get_search_form(); ?> -->
			<div class="top_panel">	
				<a href="https://www.google.ru/search?hl=ru&q=los+angeles" target="_blank">
					<img src="<?php bloginfo('template_url' );?>/img/losangeles.jpg" alt="" class="twn">
				</a>
				<a href="https://www.google.ru/search?hl=ru&q=new+york" target="_blank">
					<img src="<?php bloginfo('template_url' );?>/img/newyork.jpeg" alt="" class="twn">
				</a>
				<a href="https://www.google.ru/search?hl=ru&q=orlando" target="_blank">
					<img src="<?php bloginfo('template_url' );?>/img/orlando.jpg" alt="" class="twn">
				</a>
				<a href="https://www.google.ru/search?hl=ru&q=miami" target="_blank">
					<img src="<?php bloginfo('template_url' );?>/img/miami.jpg" alt="" class="twn">
				</a>
			</div>
			<div class="posts">
				<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
					<!-- ОДНА СТАТЬЯ!! НАЧАЛО -->
					<div id="post">
						<h3><?php the_title(); ?></h3>
						<div id="time"><?php the_time(); ?></div>
						<article class="clr article">
							<?php	the_content(); ?>
						</article>
						<div class="comments_shape">
							<p>comments</p>
							<div class="like">
								like repost
							</div>
							<!-- <div class="comments clr"> -->
											<!-- НАЧАЛО КОММЕНТАРИЯ -->
									<!-- <div class="comment">  -->
										<!-- <div class="comment_author"> -->
											<!-- <?php echo get_comment_author_email(get_comment_id()); ?> -->
										<!-- </div> -->
										<!-- <div class="comment_time">12:15</div>
										<div class="comment_text"></div> -->
									<!-- </div> -->
											<!-- КОНЕЦ КОММЕНТАРИЯ -->
							<!-- </div> -->
						</div>
					</div>
					<!-- ОДНА СТАТЬЯ!! КОНЕЦ -->
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php wp_footer(); ?>
	</div>
	<script src="libs/headhesive/headhesive.min.js"></script>
</body>
</html>