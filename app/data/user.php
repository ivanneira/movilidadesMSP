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

    public $id;
    public $user;
    public $name;

    function __construct($_id){

        $this->id = $_id;

    }

    function getData(){

        $db = new MySQL();

        if(isset($_SESSION['id'])) {

            $result = $db->consulta("SELECT id, user, nombre FROM test WHERE id = " . $this->id);

            $row = $db->fetch_array($result);

            $this->user = $row['user'];
            $this->name = $row['nombre'];

            //$usrOBJ = new user($row['id'], $row['user'], $row['nombre']);

            //$_SESSION['user'] = $usrOBJ;
        }
//        else{
//            $_SESSION['user'] = "error";
//        }
    }
}