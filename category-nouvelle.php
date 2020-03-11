<?php


//get_header();
?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
<?php


while ( have_posts() ) :
    the_post();
    //get_template_part( 'template-parts/content', 'page' );  
    
endwhile;

get_template_part('header');

echo '<h2>' .category_description(get_category_by_slug('Nouvelles')) . '</h2>';


$args = array(
    "category_name" => "nouvelle",
    "posts_per_page" => 6
//            "orderby" => "date", 
//          "order" => "ASC"

);
$query1 = new WP_Query($args);


while ($query1->have_posts()){
    $query1->the_post();
    
    echo "<section id='nouvelleFlex'>"; 
    the_post_thumbnail('thumbnail');
    echo "<div id='textFlex'><h2>" . get_the_title() . "</h2>";
    echo "<p>" . get_the_excerpt() . "</p></div>";
    echo "</section>";
    echo "<button type='button'>Lire plus </button>";
}


?>
    </main><!-- #main -->
	</div><!-- #primary -->
 
    

<?php
//get_sidebar();
//get_footer();
?>