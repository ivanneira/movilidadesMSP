$(function () {

    $("#btningresar").click(function () {

        $.ajax({
            url: "trylogin/"+ $("#txt_usr").val() + "/" + $.md5($("#txt_pwd").val()),
            type: "POST",
            global: true

        }).done(function(data) {

            if(data == 0){
                alert("Nombre de usuario o contraseña incorrecta");
            }else{

                window.location.href = "aindex";
            }

        });

    });

});