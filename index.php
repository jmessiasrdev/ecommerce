<?php

require_once "vendor/autoload.php";

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function () {

	echo "OK e aí, estou no xampp, alguma coisa contra?";

});

$app->run();

?>