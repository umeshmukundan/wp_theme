<?php

function portfolio(){
    wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"');
    wp_enqueue_style('font-awesome1','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('integrity','sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh')
    wp_enqueue_style('style',get_stylesheet_uri(),'/style.css');
}

add_action('wp_enqueue_script','portfolio');

?>