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
 * @package Underscores
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

//			get_template_part( 'template-parts/content', 'page' );
            echo get_the_title();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

        endwhile; // End of the loop.
        
echo '<h2>' .category_description(get_category_by_slug('nouvelles')) . '</h2>';


        $args = array(
            "category_name" => "nouvelles",
            "posts_per_page" => 3
//            "orderby" => "date", 
  //          "order" => "ASC"

        );
        $query1 = new WP_Query($args);


        while ($query1->have_posts()){
            $query1->the_post();
            echo "<h2>" . get_the_title() . "</h2>";
            echo "<p>" . get_the_excerpt() . "</p>";
        }


$args2 = array(
    "category_name" => "Événement",
    "posts_per_page" => 10
);


		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
