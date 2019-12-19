<?php

$tests = $app['database']->selectAll('tests');


require 'views/index.view.php';