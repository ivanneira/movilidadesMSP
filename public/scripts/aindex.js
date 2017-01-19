/**
 * Created by Ivan on 12/01/2017.
 */

   function loadPage(){


        $.ajax({
            url: "abm_usuarios",
            type: "GET",
            global: true

        }).done(function(data) {

            $(".content").html(data);
        });
   }
