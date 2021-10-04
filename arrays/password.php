<?php

function ra_pass($upper = 1, $lower = 5, $numeric = 3, $other = 2)
{
    $pass = '';
    for ($i = 0; $i < $upper; $i++) {
        $pass .= chr(rand(65, 90));
    }
    for ($i = 0; $i < $lower; $i++) {
        $pass .= chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $i++) {
        $pass .= chr(rand(48, 57));
    }
    for ($i = 0; $i < $other; $i++) {
        $pass .= chr(rand(35, 47));
    }


    echo str_shuffle($pass);
}


ra_pass(3, 4, 5, 4);
