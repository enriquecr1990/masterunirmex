$(document).ready(function(){

    Master.iniciar_contenido_sitio();

});

var Master = {

    iniciar_contenido_sitio : function(){
        Vistas.nav_sitio(); //cargamos el menu
        $('#contenedor_sitio').html(Vistas.spinner_sitio());// ponemos el spiner de que esta pensando la pagina

        //cargamos e iniciamos las vistas de html para que existan los componentes
        setTimeout(function(){
            $('#contenedor_sitio').html('<div id="contenedor_busqueda"></div><div id="contenedor_resultados"></div><div id="contenedor_modal"></div>');
            Vistas.formulario_busqueda_contacto();
            Vistas.tablero_resultado_contacto();
            Vistas.select_tipo_telefono('#buscar_sltTipoTelefono'); //cargamos el catalogo del
            //conseguimos el html de la modal para agregar/modificar contacto
            Vistas.formulario_contacto();
        },500);

    },

    //validar un formulario
    validar : function (id_form,options){
        var validator = $(id_form).validate(options);
        validator.form();
        var result = validator.valid();
        return result;
    },

    //reglas de validacion y estilo de las validaciones
    reglas_validate : function () {
        //var rules = {};
        var rules = {
            errorElement: "span",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block invalid-feedback" );

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents( ".form-group" ).addClass( "has-feedback" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
            },
            success: function ( label, element ) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            }
        }
        return rules;
    },

    //funcion para obtener el html como respuesta de una peticion de un controlador
    obtener_contenido_peticion_html : function (url,parametros,procesarFuncion,metodo) {
        if (!metodo) {
            metodo = "POST";
        }
        $.ajax({
            type : metodo,
            data : parametros,
            dataType: "html",
            url : url,
            success : function (data) {
                procesarFuncion(data,true);
            },
            error : function (xhr,ajaxOptions,thrownError) {
                alert(xhr.status);
                alert(thrownError);
                processor("No se pudo establecer con el servidor",false);
            }
        });
    },

    //funcion para obtener el json como respuesta de una peticion de un controlador
    obtener_contenido_peticion_json : function (url,parametros,processor,metodo) {
        if (!metodo) {
            metodo = "POST";
        }
        $.ajax({
            type : metodo,
            data : parametros,
            dataType: "json",
            url : url,
            success : function (data) {
                processor(data,true);
            },
            error : function (xhr,ajaxOptions,thrownError) {
                alert(xhr.status);
                alert(thrownError);
                processor("No se pudo establecer con el servidor",false);
            }
        });
    },

    //se enviar el formulario por el metodo post hacia un controlador
    enviar_formulario_post : function (id_formulario,url,processor,parametros) {
        $.ajax({
            type : "POST",
            url : url,
            data : $(id_formulario).serialize()+Master.serializar_json_formulario(parametros),
            dataType : "json",
            success:function (data) {
                processor(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                //alert(thrownError);
                processor(errorResponse);
            }
        });
    },

    //funcion que nos devuel el post de un formulario para enviarlo al controller
    obtener_post_formulario : function (id_formulario) {
        return $('#'+id_formulario).serialize()+Master.serializar_json_formulario(undefined);
    },

    //funcion que nos permite serializar en json el post un formulario
    serializar_json_formulario : function (json) {
        var strSerialized = '';
        if(json != null){
            $.each(json,function (key,value) {
                strSerialized += strSerialized == "" ? '&'+key+'='+value : '&'+key+'='+value;
            });
        }
        return strSerialized;
    },

    //funcion para mostar modal de bootstrap
    mostrar_ocultar_modal : function(id_modal,mostrar = false){
        if(mostrar){
            $(id_modal).modal({backdrop: 'static', keyboard: false});
            $(id_modal).modal('show');
        }else{
            $(id_modal).modal('hide');
        }
    }

};