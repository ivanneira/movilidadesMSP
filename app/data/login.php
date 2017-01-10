<?php
@session_start();
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 09/01/2017
 * Time: 07:45 AM
 */

require_once "db.inc.php";
require_once "mysql.php";
require_once "user.php";


class login {

    public static function doLogin($usr,$pas){

        $db = new MySQL();


        $result = $db->consulta("SELECT id FROM test WHERE user = '".$usr."' AND password = '".$pas."' LIMIT 1");
        $id = new stdClass();

        if($db->num_rows($result)>0) {


            $row = $db->fetch_array($result);

            $id = $row['id'];

            $result = $db->consulta("SELECT id, user, nombre FROM test WHERE id = ".$id);

            $row = $db->fetch_array($result);

            $usrOBJ = new user($row['id'],$row['user'],$row['nombre']);


            $_SESSION['user'] = $usrOBJ;

        }else{
            return 0;
        }

        return $id;
    }


}
