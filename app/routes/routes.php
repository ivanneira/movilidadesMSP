<?php


//raiz
$app->get('/', function ($reqt, $res, $args) use($app){

    if(isset($_SESSION['id'])){
        //ruta a index de usuario
    }else {
        return $res->withStatus(302)->withHeader('Location','login');
    }

});

//login
$app->get('/login', function($request, $response, $args) use($app){
    print_r("esto sería un login");
});