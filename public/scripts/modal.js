/**
 * Created by Ivan on 04/01/2017.
 */

var _Timeout=35000; //10 segundos de espera para procesos
$body = $("body");

$(document).on({
    ajaxStart: function() {
        $body.addClass("loading");
    },

    ajaxStop: function() {
        $body.removeClass("loading");
    }
});

//esta es la función que llama al waiting durante un ajax
$(document).ajaxStart(function(e){

    waitingModal(true);
});

$(document).ajaxStop(function (e) {
    waitingModal(false);
});

// $.ajaxSetup({
//     complete: function() {
//         waitingModal(false);
//     },
//
//     error: function() {
//         waitingModal(false);
//     }
// });


function waitingModal(show){

    if(show){
        makeModal();
    }else{
        $("#waiting_ajax").remove();
    }

}

function makeModal(){

    var html = '<div id="waiting_ajax"><p class="waiting_inner">Un momento por favor</p><div class="progress"><div class="indeterminate"></div></div></div>';

    $("body").append(html);

}

function warningModal(title, text){

    var html = '<div id="waiting_ajax"><h4>'+title+'</h4><p class="waiting_inner">'+text+'</p></div>';
}