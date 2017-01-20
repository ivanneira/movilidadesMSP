<?php
/****
GET: Para consultar y leer recursos
POST: Para crear recursos
PUT: Para editar recursos
DELETE: Para eliminar recursos.
PATCH: Para editar partes concretas de un recurso.
****/

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


//ABM Permisos (retorna vista)
$app->get('/abm_permisos', function($req, $res) use($app){

    return $this->renderer->render($res, 'abm.permisos.php');
});

//Rellena la grilla
$app->get('/abm_getUsuarios', function($req, $res) use($app){

    require_once "../app/controllers/abm_getUsuariosController.php";

    return getDatos();
});

//Guarda datos la grilla
$app->post('/abm_getUsuarios', function($req, $res) use($app){

    require_once "../app/controllers/abm_getUsuariosController.php";
    return saveDatos();

});


//Elimina datos de la grilla
$app->delete('/abm_getUsuarios', function($req, $res) use($app){

    require_once "../app/controllers/abm_getUsuariosController.php";
    return delDatos();

});



