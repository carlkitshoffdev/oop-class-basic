<?php

    // include the class file
    require_once('core/class/oop.php');

    // instantiate the and run a couple of test runs
    $oop = new oop;

    echo $oop->print_name( 'Carl', 'Kitshoff' ) . PHP_EOL;
    echo $oop->print_name( 'Bill', 'Gates' ) . PHP_EOL;
    echo $oop->print_name() . PHP_EOL;