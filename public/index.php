<?php

/**
 * DRM - an mini framwork php
 *
 * @package drm_frm
 * @author Vahry
 * @license http://opensource.org/licenses/MIT MIT License
 */


/*
 * SYSTEM DIRECTORY NAME
 *-
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */

$system_folder = 'system';

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('DRM', ROOT . $system_folder . DIRECTORY_SEPARATOR);

//ini hanya optional
if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}
/*
 * LOAD CONFIG FILE
 *-
 * This variable must contain the name of your "config" directory.
 * Set the path if it is not in the same directory as this file.
 */

require_once DRM . 'config/config.php';


/*
 * LOADING 
 */

//memeriksa config maintance
if ($maintance == "On") {
    echo "maintance";
} else {
    //memulai Application
    require_once DRM . '/init.php';
    $app = new App;
}