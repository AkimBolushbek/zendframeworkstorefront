<?php
set_include_path('.' . PATH_SEPARATOR . '../library' . PATH_SEPARATOR . get_include_path());

require 'Zend/Loader.php';

Zend_Loader::registerAutoload();

/**
 * Setup Front controller
 */
$front = Zend_Controller_Front::getInstance();

$front->registerPlugin( new SF_Plugin_Initialization('development') );
$front->dispatch(); 
