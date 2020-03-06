<?php


get_header();
?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
/////////////////////////////////////////  Categorie evenement
<?php


while ( have_posts() ) :
    the_post();
//get_template_part( 'template-parts/content', 'page' );
  // echo'  <h3>' . get_the_title() . '</h3>';


endwhile; // End of the loop.

//Affichage des Événements
echo '<h2>' .category_description(get_category_by_slug('Événement')) . '</h2>';


echo '<section >';

   while ( have_posts()) :
   the_post();

    $jour = (int)get_the_date('j');
    $mois = (int)get_the_date('m');

    $gridArea = $jour . '/' . $mois . '/' . ($jour+1) . '/' . ($mois+1) ;

echo '<div id="evenement"><p style="grid-area: '.$gridArea . '">' . 
get_the_title() . $gridArea .get_the_date('j / m / Y')
."</p></div>";

endwhile;
echo "</section>"

 


?>