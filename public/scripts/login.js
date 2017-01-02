$(function () {

    $("#btningresar").click(function () {

        $.ajax({
            url: "trylogin/"+ $("#txt_usr").val() + "/" + $("#txt_pwd").val(),
            type: "POST"
            //context: document.body
        }).done(function(data) {

            //console.dir(data);

            if(data == 0){
                alert("Nombre de usuario o contraseña incorrecta");
            }else{

                window.location.href = "aindex";
            }

        });

    });

});