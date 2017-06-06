<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');
$f3->config('routes.ini');

$datasource = $f3->get('datasource');

$db=new \DB\SQL('mysql:host='.$datasource['HOST'].';port='.$datasource['PORT'].';dbname='.$datasource['DATABASE'],$datasource['USER'],$datasource['PASS']);

$f3->set('db_connection', $db);

$f3->run();
