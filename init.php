<?php
// Autoload Classes
require_once 'functions/autoloader.php';

// Start Session
session_start();

// Including  config
require_once 'config/config.php';


// Include Helper Functinos
require_once 'functions/helpers.php';

// Defile global constants
define("APP_NAME", "CMS PDO SYSTEM");
define ("PROJECT_DIR","todo-cms-oop-php");
