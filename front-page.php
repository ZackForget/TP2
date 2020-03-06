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
		get_template_part( 'template-parts/content', 'page' );
           // echo get_the_title();


        endwhile; // End of the loop.
        

 $args0 = array(
            "category_name" => " Conférences",
            "posts_per_page" => 5
        );

        $query0 = new WP_Query($args0);



        $args = array(
            "category_name" => "nouvelles",
            "posts_per_page" => 4,
            "orderby" => "date", 
            "order" => "ASC"

        );



        $query1 = new WP_Query($args);




        //Affichage Conférences
        echo '<h2>' .category_description(get_category_by_slug('conferences')) . '</h2>';
       

        while ($query0->have_posts()){
            $query0->the_post();
            echo "<div id=confDiv>";
            the_post_thumbnail('thumbnail');
            
            echo "<section id=confDesc><h2>" . get_the_title();
            echo "  -  ";
            echo get_the_date() . "</h2>";
            
            echo "<p>" . get_the_excerpt() . "</p></section></div>";
            
       
       // echo "<h2>" . get_the_title() . "</h2>";
        //echo "<p>" . the_post_thumbnail('thumbnail') . "</p>";
        }


//Affichage des nouvelles
    echo "<h2>" .category_description(get_category_by_slug('nouvelles')) . "</h2>";

    echo "<div id='nouvDivFull'>";

    
        while ($query1->have_posts()){
            $query1->the_post();
            
                echo "<div id='nouvDiv'>
                    <section id='nouvTitre'>
                         <h2>" . get_the_title() . "</h2></section>";
                    echo "<section='nouvImg'>";
                     the_post_thumbnail('thumbnail');
            echo "</section> </div>";
       
        }
        echo "</div>";






get_template_part('category-evenements');



		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
