$(document).ready(function(){

    $(document).on('click','#btn_buscar_contacto',function(){
        Contacto.buscar_contacto();
    });

    $(document).on('click','#btn_guardar_contacto',function(){
        if(Contacto.validar_formulario()){
            Contacto.guardar();
        }
    });

    $(document).on('click','#agregar_contacto',function(){
        Contacto.formulario_contacto_nuevo();
    });

    $(document).on('click','.modificar_contacto',function(){
        var data_contacto = $(this).data('contacto');
        var contacto = JSON.parse(atob(data_contacto));
        Contacto.formulario_contacto_modificar(contacto);
    });

    $(document).on('click','.eliminar_contacto',function () {
        var id_contacto = $(this).data('id_contacto');
        var confirmacion = confirm('¿Está seguro de eliminar el contacto?');
        if(confirmacion){
            Contacto.eliminar(id_contacto);
        }
    });

});

var Contacto = {

    validar_formulario : function(){
        $('.error').remove();
        var validacion = Master.validar('#form_contacto',Master.reglas_validate());
        return validacion;
    },

    buscar_contacto : function(){
        $('#contenedor_resultados').html(Vistas.spinner_sitio());
        Vistas.tablero_resultado_contacto();
    },

    formulario_contacto_nuevo : function(){
        $('#reset_form_contacto').trigger('click');
        $('.is-invalid').removeClass('is-invalid');
        $('.is-valid').removeClass('is-valid');
        $('.error').remove();
        Master.mostrar_ocultar_modal('#mdl_form_contacto',true);
    },

    formulario_contacto_modificar : function(contacto){
        Vistas.set_formalario_contacto(contacto);
        $('.is-invalid').removeClass('is-invalid');
        $('.is-valid').removeClass('is-valid');
        $('.error').remove();
        Master.mostrar_ocultar_modal('#mdl_form_contacto',true);
    },

    guardar : function(){
        //falta logica para el backend
        Master.enviar_formulario_post(
            '#form_contacto',
            Backend.url + 'contacto/guardar',
            function(response){
                if(response.status){
                    Master.mostrar_ocultar_modal('#mdl_form_contacto',false);
                    Vistas.procesar_mensaje(response.msg,'success');
                    Contacto.buscar_contacto();
                }else{
                    Vistas.procesar_mensaje(response.msg,'warning','#contenedor_mensajes_modal');
                }
            }
        );
    },

    eliminar : function(id_contacto){
        Master.obtener_contenido_peticion_json(
            Backend.url + 'contacto/eliminar/'+id_contacto,
            {},
            function(response){
                if(response.status){
                    Vistas.procesar_mensaje(response.msg,'success');
                    Contacto.buscar_contacto();
                }else{
                    Vistas.procesar_mensaje(response.msg,'warning');
                }
            },
            'get'
        );
    }

}