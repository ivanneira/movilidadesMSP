<?php

include ("../app/data/db.inc.php");
include( "../app/data/mysql.php");


//login
$app->get('/login', function($req, $res) use($app){

    return $this->renderer->render($res, 'login.php');
});

// intenta acceso 1 es permitido 0 es no encontrado
$app->post('/trylogin/{usr}/{pass}', function( $request,  $response) use($app){



    $db = new MySQL();

    $user = $request->getAttribute('usr');
    $password = $request->getAttribute('pass');

    $result = $db->consulta("SELECT id FROM test WHERE user = '".$user."' AND password = '".$password."' LIMIT 1");
    $array = new stdClass();

    if($db->num_rows($result)>0) {

         $row = $db->fetch_array($result);

         $array = $row['id'];

    }else{
        $array = 0;
    }

    return json_encode($array);

});