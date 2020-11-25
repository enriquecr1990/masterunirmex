$(document).ready(function(){

    Start.iniciar_tooltips();

});

var Start = {

    iniciar_tooltips : function(){
        $('[data-toggle="tooltip"]').tooltip();
    }

}