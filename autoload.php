<?php

spl_autoload_register(function ($path) {
    include $path . '.php';
});