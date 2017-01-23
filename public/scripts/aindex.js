/**
 * Created by Ivan on 12/01/2017.
 */

   function loadPage(routes){

        $.ajax({
            url: routes,
            type: "GET",
            global: true,
            cache:false

        }).done(function(data) {

            console.log(data)
            $(".mainContent").html(data);
        });
   }
