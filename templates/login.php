<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Movilidades  MSP| Acceso seguro</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="styles/bootstrap-theme.min.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/ls.css">

</head>
<body class="hold-transition login-page">
<div class="bg" style=""></div>
<!-- Modal -->
<div id="mensajeModal" class="modal"  data-easein="flipBounceYIn" tabindex="-1" data-keyboard="false" data-backdrop="static"  role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="opacity: 1; display: block;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><b>A</b>cceso <b>S</b>eguro</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
            </div>
        </div>
    </div>
</div>
<!--END -->
<div class="login-box">
    <div class="login-logo">
        <a href="#">[ Movilidades <b>M.S.P</b> ]</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><b>A</b>cceso <b>S</b>eguro</p>

        <form id="frm_login" action="" method="post">
            <div class="form-group has-feedback">
                <input name="txt_usr" maxlength="50" id="txt_usr" type="text" class="form-control" placeholder="Usuario">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="txt_pwd" maxlength="32" id="txt_pwd" type="password" class="form-control" placeholder="Clave">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div style="text-align:right;margin-right:4%;">
<!--                    <button type="button" onclick="window.location.href='index.html'" class="btn btn-default ">Cancelar</button>-->
                    <button type="button" id="btningresar" class="btn btn-success ">Ingresar</button>
                </div>
            </div>
<!--            <div class="row">-->
<!--                <textarea id="data" name="data" style="height:200px; width:100%">....</textarea>-->
<!--            </div>-->
        </form>
<!--        <a href="#">Recuperar clave</a><br>-->
        <div id="myImage"></div>
    </div>
</div>
<script src="scripts/jquery-3.1.1.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/login.js"></script>
<script src="scripts/jQuery-MD5.js"></script>
<!--<script type="text/javascript" charset="utf-8" src="cordova.js"></script>-->
<!--<script src="js/index.js"></script>-->
</body>
</html>
