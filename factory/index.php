<?php

namespace factory;

include '../autoload.php';

$creator = new FacebookPoster("john_smith", "******");
$creator->post("Hello world!");

$creator = new LinkedInPoster("john_smith@example.com", "******");
$creator->post("Hello world!");
$creator->post("I had a large hamburger this morning!");