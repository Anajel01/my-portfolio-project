<?php function my_portfolio_enqueue_styles() {
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

    wp_enqueue_style('my_portfolio_enqueue_styles', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}

add_action("wp_enqueue_scripts", "my_portfolio_enqueue_styles");

function acf_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}

add_action("init", "acf_remove_gutenberg");

function theme_name_scripts() {
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
}
add_action("wp_enqueue_scripts", "theme_name_scripts");

function plp_register_strings() {
    pll_register_string("Polylang Playground","Portfolio");
    pll_register_string("Polylang Playground","Skills");
    pll_register_string("Polylang Playground","Contact");
    pll_register_string("Polylang Playground","CV");
    pll_register_string("Polylang Playground","Video CV");
    pll_register_string("Polylang Playground","Contact me");
    pll_register_string("Polylang Playground","Projects I worked on:");
    pll_register_string("Polylang Playground","Visit");
    pll_register_string("Polylang Playground","call me:");
    pll_register_string("Polylang Playground","CONTACT");
    pll_register_string("Polylang Playground","My<br>Socials:");
 

}



add_action("init", "plp_register_strings");