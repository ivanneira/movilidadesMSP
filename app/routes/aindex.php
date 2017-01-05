<?php

$app->get('/aindex', function($req, $res) use($app){

    return $this->renderer->render($res, 'aindex.php');
});
