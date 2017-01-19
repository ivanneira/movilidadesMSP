<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUPER MEGA HIPER DEPLOY SYSTEM QUE ES MUCHO MEJOR QUE .NET</title>
    <script src="scripts/jquery-3.1.1.min.js"></script>
</head>
<body>
<p>SUPER MEGA HIPER DEPLOY SYSTEM QUE ES MUCHO MEJOR QUE .NET</p>
<p id="status">
    <?php

    //$return_var= ''; passthru('git',$return_var); print_r( json_encode($return_var) );

    function execPrint($command) {
        $result = array();
        exec($command, $result);
        foreach ($result as $line) {
            print($line . "\n");
        }
    }

    execPrint("git pull /var/www/html/movilidadesMSP/");

    ?>
</p>

</body>
</html>