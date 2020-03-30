<?php
/*Ce fichier fait partie delucasjules, twentynineteen child theme.

Toutes les fonctions de ce fichier seront chargées avant les fonctions de thème parent.
En savoir plus sur https://codex.wordpress.org/Child_Themes.

Remarque : cette fonction charge la feuille de style parent avant, puis la feuille de style du thème enfant
(laissez-le en place à moins que vous sachiez ce que vous faites.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function lucasjules_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'lucasjules_enqueue_child_styles' );

/*Écrivez ici vos propres fonctions */
function dire_bonjour(){
	echo '<p class="hello"> Hello World !!</p>';
}
add_action( 'lucas', 'dire_bonjour');

function hook_nocache() {
 }
  function hook_javascript() {
    ?>
        <script>
            alert('La page est en cours de chargement');
        </script>
    <?php
}
add_action('wp_head', 'hook_javascript');
?>
