<?php
// Start Session
session_start();

// Including  config
require_once 'config/config.php';

// Loadig database
require_once 'classes/Database.php';

// Include Helper Functinos
require_once 'functions/helpers.php';

// Defile global constants
define("APP_NAME", "CMS PDO SYSTEM");
