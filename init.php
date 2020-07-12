<?php
/*
Plugin Name: BMI Calculator - DiWeb
Plugin URI: https://github.com/kvachakhia/bmi-calculator-wordpress-plugin
Description: BMI Calculator
Version: 2.0
Author: Dimitri Kvachakhia
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Text Domain: bmi-calculator-diweb
*/


if (!defined('ABSPATH')) {
    die('Invalid request.');
}

if (!function_exists('bmi_calculator_widget_short_code')) {

    include_once 'shortcode.php';

}
