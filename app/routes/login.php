<?php
require '../app/data/user.php';

//login
$app->get('/login', function($req, $res) use($app){

    return $this->renderer->render($res, 'login.php');
});

// intenta acceso 1 es permitido 0 es no encontrado
$app->post('/trylogin/{usr}/{pass}', function( $req,  $response) use($app){


    $user = $req->getAttribute('usr');
    $password = $req->getAttribute('pass');

    $id = login::doLogin($user,$password);

    return $id;

});