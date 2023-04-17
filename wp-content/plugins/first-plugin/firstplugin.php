<?php
/*
Plugin Name:capitalize the text
Description: plugin for testing
Author: norhan  

*/ 
add_action("the_title","custom_title_case");
function custom_title_case($title) {
    $title = strtoupper($title);
    return $title;
}

// add_filter('the_title', 'custom_title_case');

