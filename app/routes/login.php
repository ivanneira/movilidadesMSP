<?php
require '../app/data/user.php';
require_once "../app/data/mysql.php";
//login
$app->get('/login', function($req, $res) use($app){

    return $this->renderer->render($res, 'login.php');
});

// intenta acceso 1 es permitido 0 es no encontrado
$app->post('/trylogin/{usr}/{pass}', function( $req,  $response) use($app){


    $user = $req->getAttribute('usr');
    $password = $req->getAttribute('pass');
    $db = new MySQL();


    $result = $db->consulta("SELECT id FROM test WHERE user = '".$user."' AND password = '".$password."' LIMIT 1");
    $id = new stdClass();

    if($db->num_rows($result)>0) {


        $row = $db->fetch_array($result);

        $id = $row['id'];

        $_SESSION['id'] = $id;

        //return $id;


    }else{

        //$_SESSION['id'] = 0;

        $id = 0;
    }

    //$id = login::doLogin($user,$password);

    //$_SESSION['id'] = $id;

    return $id;

});