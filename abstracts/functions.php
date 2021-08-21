<?php
function dump($input)
{
    echo '<pre>';
    print_r($input);
    echo '</pre>';
}

function dd($input)
{
    dump($input);
    die();
}