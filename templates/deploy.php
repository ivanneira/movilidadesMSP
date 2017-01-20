<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUPER MEGA HIPER DEPLOY SYSTEM QUE ES MUCHO MEJOR QUE .NET</title>
    <script src="../public/scripts/jquery-3.1.1.min.js"></script>
</head>
<body>
<p>SUPER MEGA HIPER DEPLOY SYSTEM QUE ES MUCHO MEJOR QUE .NET, YEAH </p>
<p id="status">

<?php
    require_once('..\app\Git.php');

    $repo = Git::open('/var/www/html/movilidadesMSP/');

    echo $repo->pull();

    //
?>
</p>

</body>
</html>