<?php

if (file_exists(__DIR__ . '../vendor/autoload.php')) {
    require_once __DIR__ . '../vendor/autoload.php';
}

if (class_exists('SilverStripe\CMS\Controllers\ContentController')) {
    \SilverStripe\CMS\Controllers\ContentController::add_extension('SilverStripe\CMS\Controllers\ContentController', 'Heyday\HashPath\HashPathExtension');
}
