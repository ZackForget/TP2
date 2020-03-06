<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();



//Affichage des Événements
echo '<h2>' .category_description(get_category_by_slug('Événement')) . '</h2>';



$args2 = array(
    "category_name" => "Événement",
    "posts_per_page" => 10
);

    $query2 = new WP_Query($args2);

    while ($query2->have_posts()){
        $query2->the_post();
        //echo "<div id='gridEv'> <p>" . get_the_title() . " - " ;
        //echo     the_date() . "</p> </div>";
   

    $jour = (int)get_the_date('j');
    $mois = (int)get_the_date('m');

    $gridArea = $jour . '/' . $mois . '/' . ($jour+1) . '/' ($mois+1) ;

echo '<p style="grid-area: '.$gridArea . '">' . 
get_the_title() . $gridArea .get_the_date('j / m / Y')
."</p>";


 }
//section class grille événement
//<php
//while (have post)
//


//(get_the_date) ('j')
//(get_the_date) ('m')
//(get_the_date) ('y')

//$jour = getTheDate

?>