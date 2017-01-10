<?php

spl_autoload_register(function ($clase) {
    include 'clases/' . $clase . '.php';
});


//login
$app->get('/login', function($req, $res) use($app){

    return $this->renderer->render($res, 'login.php');
});

// intenta acceso 1 es permitido 0 es no encontrado
$app->post('/trylogin/{usr}/{pass}', function( $req,  $response) use($app){


    $user = $req->getAttribute('usr');
    $password = $req->getAttribute('pass');



    return json_encode(login::doLogin($user,$password));

});