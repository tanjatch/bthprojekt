<?php
//
// PHASE: BOOTSTRAP
//
define('OLGA_INSTALL_PATH', dirname(__FILE__));
define('OLGA_SITE_PATH', OLGA_INSTALL_PATH . '/site');

require(OLGA_INSTALL_PATH.'/src/COlga/bootstrap.php');

$ol = COlga::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ol->FrontControllerRoute();
//
// PHASE: THEME ENGINE RENDER
//
$ol->ThemeEngineRender();
