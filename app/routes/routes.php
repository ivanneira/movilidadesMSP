<?php
include ("login.php");

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

//login
$app->get('/login', function($req, $res) use($app){
//    $result = $db->consulta('SELECT * FROM test');
//    $array = new stdClass();
//    while($row = $db->fetch_array($result)) {
//        $array = $row;
//
//    }
//
//    return json_encode($array);

    return $this->renderer->render($res, 'login.php');
});


