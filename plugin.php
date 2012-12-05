<?php

/*
Plugin Name: ACF Boolean Field
Description: A fork of the default ACF True/False field with additional options
Version: 0.0.1
Author: Seamus P. H. Leahy
Author URI: http://seamusleahy.com
License: MIT
*/
define('ACF_BOOLEAN_FIELD_FILE', __FILE__);


function register_acf_boolean_field($fields) {
  $fields[] = array('class' => 'ACF_Boolean_Field', 'url' => dirname(__FILE__).'/acf_boolean_field.class.php');
  
  return $fields;
}

add_filter('acf_register_field', 'register_acf_boolean_field');