<?php



?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
<?php


while ( have_posts() ) :
    the_post();
//get_template_part( 'template-parts/content', 'page' );
  // echo'  <h3>' . get_the_title() . '</h3>';


endwhile; // End of the loop.

get_header();
get_template_part('header');

$args = array(
    "category_name" => "atelier",
    "posts_per_page" => 16,
   

);

$query1 = new WP_Query($args);


//Affichage des Événements
echo '<h2>' .category_description(get_category_by_slug('Atelier')) . '</h2>';

    echo "<div id='grilleAteliers'>";

   while ( $query1->have_posts()) :
   $query1->the_post();

    $heure = (int)get_post_field('post_name');

    $gridarea = $heure;



    echo "<div>";
   echo "<p style='grid-area: ".$gridarea."' > <span style=color:grey>" . get_the_title() . " </span></p>";
   echo "<p><span style=color:red>" . get_post_field('post_name') . "</span></p>";
   echo  "<p><span style=color:blue>" . get_the_author_meta('display_name', $post->post_author) . "</span></p>";
    echo "</div>";

endwhile;
 
echo "</div>";

?>