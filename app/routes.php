<?php

/*
* Create your routes to all URLs here. Make sure the first argument of the get
* method is the API path, and the second a link to an existing Class:method.
* This method can then return a rendered twig template.
*/

$app->get('/', 'HomeController:index');
