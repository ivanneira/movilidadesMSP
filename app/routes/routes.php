<?php

require_once "../app/data/mysql.php";

$db = new MySQL();


//raiz
$app->get('/', function ($reqt, $res, $args) use($app){

    if(isset($_SESSION['id'])){
        //ruta a index de usuario
    }else {
        return $res->withStatus(302)->withHeader('Location','login');
    }

});

//login
$app->get('/login', function($request, $response, $args) use($app,$db){
    $result = $db->consulta('SELECT * FROM test');
    $array = new stdClass();
    while($row = $db->fetch_array($result)) {
        $array = $row;

    }

    return json_encode($array);
});