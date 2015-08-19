<?php
/**
 * Custom functions
 */


/* Set post thumbnail size */

set_post_thumbnail_size( 600, 600, true );


/*
    Calculate image size on homepage
 */

function truefalse($trueperc, $falseperc) {
    if (($trueperc+$falseperc) !== 100) {
        echo 'Error invalid percentages';
    }
    $perc = rand(1,100);
    if ($perc < $trueperc) {
        return 'w1';
    }
    elseif ($perc > $falseperc) {
        return 'w2';
    }
}


function whichColor() {

    $perc = rand(1,100);

    if ($perc < 25) {
        return 'rose';
    }
    elseif ($perc < 50) {
        return 'orange';
    }
    elseif ($perc < 75) {
        return 'green';
    }
    else {
        return 'blue';
    }
}