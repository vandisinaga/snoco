<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function ses_tinymce_css($wp) {
    $wp .= ',' . get_bloginfo('stylesheet_url');
    return $wp;
}
add_filter( 'mce_css', 'ses_tinymce_css' );


function get_top_ancestor_id() {

    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];

    }

    return $post->ID;

}

function get_top_parent_page_id() {
    global $post;
    if ($post->ancestors) {
        return end($post->ancestors);
    } else {
        return $post->ID;
    }
}

function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


//function the_excerpt_max_charlength($charlength) {
//    $excerpt = get_the_excerpt();
//    $charlength++;
//
//    if ( mb_strlen( $excerpt ) > $charlength ) {
//        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
//        $exwords = explode( ' ', $subex );
//        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
//        if ( $excut < 0 ) {
//            echo mb_substr( $subex, 0, $excut );
//        } else {
//            echo $subex;
//        }
//        echo '';
//    } else {
//        echo $excerpt;
//    }
//}
