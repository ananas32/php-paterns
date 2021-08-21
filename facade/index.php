<?php

namespace facade;

require_once '../autoload.php';
require_once '../abstracts/functions.php';

$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
$facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");
