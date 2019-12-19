<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$database = require 'core/bootstrap.php';

//die(var_dump($app));

require Router::load('routes.php')->direct(Request::uri());
