<?php
include ("login.php");
include ("aindex.php");

//engancha todos
$app->get('/', function($req, $res, $args) use($app) {

        if(isset($_SESSION['user']->id)){

        }else {
            return $res->withStatus(302)->withHeader('Location','login');
        }

});


