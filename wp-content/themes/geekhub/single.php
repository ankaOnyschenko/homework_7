<?php get_header(); ?>
	<div id="content">
	     <?php get_sidebar(); ?>  
        <div class="details">
			<ul>
				<li>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail();?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
				<a class="register" href="#">Зареєструватися</a>
				</li>
			</ul>	
        </div>
	</div>
<?php get_footer(); ?>