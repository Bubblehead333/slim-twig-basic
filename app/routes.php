<?php

// $app->get('/', function($request, $response){
//     return $this->view->render($response, 'index.twig');
// });
//
// $app->get('/media', function($request, $response){
//     return 'Media';
// });

$app->get('/', 'HomeController:index');
