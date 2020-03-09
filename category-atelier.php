<?php


get_header();
?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
<?php


while ( have_posts() ) :
    the_post();
//get_template_part( 'template-parts/content', 'page' );
  // echo'  <h3>' . get_the_title() . '</h3>';


endwhile; // End of the loop.

$args = array(
    "category_name" => "atelier",
    "posts_per_page" => 16,
    "orderby" => "title",
    "order" => "ASC"

);

$query1 = new WP_Query($args);


//Affichage des Événements
echo '<h2>' .category_description(get_category_by_slug('Atelier')) . '</h2>';



   while ( $query1->have_posts()) :
   $query1->the_post();

   echo "<p style=color:grey>" . get_the_title() . " _____ ";
   echo "<span style=color:red>" . get_post_field('post_name') . "</span>";
   echo  "<span style=color:blue> _____ " . get_the_author_meta('display_name', $post->post_author) . "</p></span>";



endwhile;
 


?>