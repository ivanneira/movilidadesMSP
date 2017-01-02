<?php
include ("login.php");
include ("aindex.php");

//raiz
//$app->get('/', function ($reqt, $res, $args) use($app){
//
//    if(isset($_SESSION['id'])){
//        //ruta a index de usuario
//    }else {
//        return $res->withStatus(302)->withHeader('Location','login');
//    }
//
//});


//engancha todos
$app->get('/', function($req, $res, $args) use($app) {

        if(isset($_SESSION['id'])){
            //ruta a index de usuario
        }else {
            return $res->withStatus(302)->withHeader('Location','login');
        }

});


