<?php
function ass_enqueue_style() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    wp_enqueue_style("style", get_stylesheet_uri() );
    wp_enqueue_style("header", get_stylesheet_directory_uri() . "/styles/header.css"); 
    wp_enqueue_style("footer", get_stylesheet_directory_uri() . "/styles/footer.css"); 
    wp_enqueue_style("page", get_stylesheet_directory_uri() . "/styles/page.css"); 

}
add_action("wp_enqueue_scripts", "ass_enqueue_style");





