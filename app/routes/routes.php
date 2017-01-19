<?php
include ("login.php");


//engancha todos
$app->get('/', function($req, $res, $args) use($app) {

        if(isset($_SESSION['user']->id)){

        }else {
            return $res->withStatus(302)->withHeader('Location','login');
        }

});


//Index de usuario autenticado
$app->get('/aindex', function($req, $res) use($app){

    return $this->renderer->render($res, 'aindex.php');
});



//ABM usuarios (retorna vista)
$app->get('/abm_usuarios', function($req, $res) use($app){



    return $this->renderer->render($res, 'abm.usuarios.php');
});

//ABM usuarios: inserta nuevo

