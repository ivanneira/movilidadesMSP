<?php
// Routes
//
//$app->get('/[{name}]', function ($request, $response, $args) {
//    // Sample log message
//    //$this->logger->info("Slim-Skeleton '/' route");
//
//    // Render index view
//    return $this->renderer->render($response, 'index.phtml', $args);
//});

class claseDeEjemplo {

    public $var1 = "test";

    public $var2 = "test1";
}


$app->get('/test', function ($request, $response, $args) {

    $testData = new claseDeEjemplo();

    return json_encode($testData);

});