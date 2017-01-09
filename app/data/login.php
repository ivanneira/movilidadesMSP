<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 09/01/2017
 * Time: 07:45 AM
 */

require_once "../app/data/db.inc.php";
require_once "../app/data/mysql.php";


class userLogin {

    public static function doLogin($usr,$pas){

        $db = new MySQL();


        $result = $db->consulta("SELECT id FROM test WHERE user = '".$user."' AND password = '".$password."' LIMIT 1");
        $array = new stdClass();

        if($db->num_rows($result)>0) {

            $row = $db->fetch_array($result);

            $array = $row['id'];

        }else{
            $array = 0;
        }

        return $array;
    }


}