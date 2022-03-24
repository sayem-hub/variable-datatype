<?php

/*Case Study:
	I have three old hp monitors, not new. I want to sell it on my own website. That’s why I should create a product upload form on my website, then upload my product with specification and available quantity. My monitors have a 15.6 inch display My monitor’s VGA cable status, yes, I will sell it for 8000 tk. */


    $item_name      = "Monitor"; //Datatype is String
    $quantity       = 3; //Datatype is Integer
    $is_monitor_new = false; //Datatype is Boolean
    $monitor_size   = 15.6; //Datatype is Float/Double
    $has_vga_cable  = true; //Datatype is Boolean
    $monitor_price  = 8000; //Datatype is Integer

    echo "I have $quantity old hp $item_name, not $is_monitor_new. I want to sell it on my own website. That’s why I should create a product upload form on my website, then upload my product with specification and available quantity. My monitors have a $monitor_size inch display. My $item_name VGA cable status $has_vga_cable. I will sell it for $monitor_price tk."
?>