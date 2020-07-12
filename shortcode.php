<?php

function bmi_calculator_widget_short_code()
{
    ob_start();

    include 'widget.php';

    return ob_get_clean();

}
add_shortcode('bmi-calculator', 'bmi_calculator_widget_short_code');
