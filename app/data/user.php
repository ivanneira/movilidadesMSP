<?php

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 09/01/2017
 * Time: 08:22 AM
 */

class user
{

    public $id;
    public $user;
    public $name;

    function __construct($_id, $_user, $_name){

        $this->id = $_id;
        $this->user = $_user;
        $this->name = $_name;

    }
}