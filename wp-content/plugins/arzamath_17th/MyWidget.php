<?php
/*
Plugin Name: Random Post Widget
Plugin URI: 
Description: Random Post Widget grabs a random post and the associated thumbnail to display on your sidebar
Author: anka
Version: 1
Author URI: http://anka.me/
*/
class RandomPostWidget extends WP_Widget
{
    function RandomPostWidget()
    {
        $widget_ops = array('classname' => 'RandomPostWidget', 'description' => 'Displays a random post with thumbnail' );
        $this->WP_Widget('RandomPostWidget', 'Random Post and Thumbnail', $widget_ops);
    }

    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
        $title = $instance['title'];
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
    <?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);

        if (!empty($title))
            echo $before_title . $title . $after_title;

        // WIDGET CODE GOES HERE
        echo "<h1>Список постов:</h1>";
				$args = array(
					'post_type' => 'new post type',

					);
				$team = new WP_Query( $args );
					if( $team->have_posts() ) {
						while( $team->have_posts() ) {
                $team->the_post();
			?>		
				<ul class="unstyled">
					<li><a class="text-warning" href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
					<li><?php echo get_the_post_thumbnail(); ?> </li>		
					<li><?php echo get_the_author_meta(meta_a) ; ?></li>
					<li><a class="btn btn-primary btn-small" href="<?php the_permalink(); ?>">read more</a></li>
				</ul>
			<?php
					}
				}
				else {
					echo 'Нет постов';
				} 
    }
}
add_action( 'widgets_init', create_function('', 'return register_widget("RandomPostWidget");') );?>