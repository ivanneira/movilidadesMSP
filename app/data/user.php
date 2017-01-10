<?php

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 09/01/2017
 * Time: 08:22 AM
 */
require_once "mysql.php";

class user
{

    public static $id;
    public $user;
    public $name;

    function __construct($_id, $_user, $_name){

        $this->id = $_id;
        $this->user = $_user;
        $this->name = $_name;

    }

//    function getData(){
//
//        $db = new MySQL();
//
//        $result = $db->consulta("SELECT id, user, nombre FROM test WHERE id = ".$_SESSION['id']);
//
//        $row = $db->fetch_array($result);
//
//        $usrOBJ = new user($row['id'],$row['user'],$row['nombre']);
//
//        $_SESSION['user'] = $usrOBJ;
//    }
}