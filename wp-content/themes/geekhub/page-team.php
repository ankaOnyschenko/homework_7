<?php
/*
	Template Name: КОМАНДА
*/
?>
<?php get_header(); ?>
	<div id="content">
        <div class="team">
            <h2>Команда GeekHub</h2>
			        <div class="content">
		<ul class="team">
			<?php
				$args = array(
					'post_type' => 'team',
					'order'     => 'ASC',
					);
				$team = new WP_Query( $args );
					if( $team->have_posts() ) {
						while( $team->have_posts() ) {
                $team->the_post();
			?>			
			<li>
				 <h3>
					<?php the_title() ?>
					<span><?php echo get_post_meta($post->ID, "location", $single = true); ?> </span>
				</h3>			
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
				} ?>
				<?php the_content() ?>
			</li>
			<?php
					}
				}
				else {
					echo 'No team!';
				}
			?>
		</ul>
	</div>

        </div>
	</div>
<?php get_footer(); ?>