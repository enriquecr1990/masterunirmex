$(document).ready(function(){

    $(document).on('change','#busqueda_avanzada',function(){
       if($(this).is(':checked')){
           $('.busqueda_avanzada').fadeIn();
       }else{
           $('.busqueda_avanzada').fadeOut();
       }
    });

});

var Vistas = {

    spinner_sitio : function(){
        /*var html_spinner = '<div class="d-flex justify-content-center">' +
                '<div class="spinner-grow text-info" role="status">' +
                '   <span class="sr-only"></span>' +
                '</div>' +
            '</div>';*/
        var html_spinner = '<div class="progress">' +
            '  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>' +
            '</div>';
        return html_spinner;
    },

    nav_sitio : function(){
        //usando la funcion de jquery
        $('#contenedor_menu').load('vistas/menu.html');
    },

    formulario_busqueda_contacto : function (){
        //usando jquery y peticiones ajax para procesar el html response
        Master.obtener_contenido_peticion_html('vistas/busqueda_contacto.html',{},function(response){
            $('#contenedor_busqueda').html(response);
        },'get');
    },

    tablero_resultado_contacto : function(){
        Master.obtener_contenido_peticion_html('vistas/resultado_busqueda.html',{},function(response){
            $('#contenedor_resultados').html(response);
            //obtenemos los datos del servidor
            Master.obtener_contenido_peticion_json(
                Backend.url + 'contacto/listado',
                Master.obtener_post_formulario('frmBusquedaContacto'),
                function(res){
                    if(res.status){
                        var tbody_contactos = Vistas.procesar_tbody_contactos(res.data);
                        $('#tbody_resultado_contactos').html(tbody_contactos);
                    }else{
                        Vistas.procesar_mensaje(response.msg,'danger');
                    }
                }
            );
        },'get');
    },

    formulario_contacto : function(){
        Master.obtener_contenido_peticion_html('vistas/form_contacto.html',{},function(response){
            $('#contenedor_modal').html(response);
            Vistas.select_tipo_telefono('#id_tipo_telefono');
        },'get');
    },

    select_tipo_telefono : function(destino){
        Catalogo.tipo_telefono(function(response){
            if(response.status){
                var html_slt = Vistas.obtener_html_cat_tipo_telefono(response.data);
                $(destino).append(html_slt);
            }else{
                Vistas.procesar_mensaje(response.msg,'danger');
            }
        });
    },

    procesar_mensaje : function(msg = [],type = 'info',contenedor_mensaje= '#contenedor_mensajes'){
        if(Array.isArray(msg) && msg.length != 0){
            var html_msg = '';
            $.each(msg,function(index,value){
                html_msg += '<li>'+value+'</li>';
            });
            var html_informacion = '<div class="row">' +
                '   <div class="form-group col-lg-12">' +
                '       <div class="alert alert-'+type+'">' +
                '           <strong>Mensajes del sistema</strong><br>' +
                '' + html_msg +
                '       </div>' +
                '   </div>' +
                '</div>';
            $(contenedor_mensaje).html(html_informacion);
            $(contenedor_mensaje).fadeIn(500);
            setTimeout(function(){
                $(contenedor_mensaje).fadeOut(500);
                $(contenedor_mensaje).html('');
            },8000);
        }
    },

    obtener_html_cat_tipo_telefono : function(cat_tipo_telefono){
        var html_cat = '';
        $.each(cat_tipo_telefono,function(index, ctt){
            html_cat += '<option value="'+ctt.id_catalogo_tipo_telefono+'">'+ctt.tipo_telefono+'</option>';
        });
        return html_cat;
    },

    procesar_tbody_contactos : function(contactos){
        var html_registros = '';
        $.each(contactos,function(index, contacto){
            //codificamos el objeto de contacto en un string JSON para luego convertirlo en un string de caracteres codificado en base64 de JS
            var dataContacto = btoa(JSON.stringify(contacto));
            var registro = '<tr id="registroContacto'+contacto.id+'">' +
                '   <td>'+ contacto.id+'</td>' +
                '   <td>'+ contacto.nombre + ' ' +contacto.paterno + ' ' + contacto.materno +'</td>' +
                '   <td>'+ contacto.genero + '</td>' +
                '   <td>'+ Vistas.getFechaCumpleanios(contacto.nacimiento) +'</td>' +
                '   <td>'+ contacto.tipo_telefono + ': ' +contacto.numero_telefono+'</td>' +
                '   <td>' +
                '       <ul>' +
                '           <li><strong>Correo: </strong>'+contacto.correo+'</li>' +
                '           <li><strong>Facebook: </strong>'+contacto.facebook+'</li>' +
                '       </ul>' +
                '   </td>' +
                '   <td colspan="centrado">' +
                '       <button type="button" class="btn btn-outline-warning btn-sm modificar_contacto" data-contacto="'+dataContacto+'">Modificar</button><br>' +
                '       <button type="button" class="btn btn-outline-danger btn-sm eliminar_contacto" data-id_contacto="'+contacto.id+'">Eliminar</button>' +
                '   </td>' +
                '</tr>';
            html_registros += registro;
        });
        return html_registros;
    },

    set_formalario_contacto : function(contacto){
        $('#id_contacto').val(contacto.id);
        $('#nombre').val(contacto.nombre);
        $('#paterno').val(contacto.paterno);
        $('#materno').val(contacto.materno);
        $('#id_tipo_telefono').val(contacto.id_catalogo_tipo_telefono);
        $('#numero').val(contacto.numero_telefono);
        $('#nacimiento').val(this.convertir_fecha_html(contacto.nacimiento));
        $('#correo').val(contacto.correo);
        $('#facebook').val(contacto.facebook);
        contacto.id_genero == 1 ? $('#radio_masculino').attr('checked',true) : $('#radio_femenino').attr('checked',true);
    },

    getFechaCumpleanios : function(fecha){
        //se dividen en array los elementos de la fecha que se recibe en formato yyyy-mm-dd por el separador - (guion medio)
        fecha = new Date(fecha);
        //se crea la fecha restando un numero al mes dado que el date de JS los meses son del 0 al 11
        return fecha.getDate() + ' de ' + this.getMes(fecha.getMonth());
    },

    getMes : function(month){
        var mes = '';
        switch (month) {
            case 0: mes ='enero';break;
            case 1: mes ='febrero';break;
            case 2: mes ='marzo';break;
            case 3: mes ='abril';break;
            case 4: mes ='mayo';break;
            case 5: mes ='junio';break;
            case 6: mes ='julio';break;
            case 7: mes ='agosto';break;
            case 8: mes ='septiembre';break;
            case 9: mes ='octubre';break;
            case 10: mes ='noviembre';break;
            case 11: mes ='diciembre';break;
        }
        return mes;
    },

    convertir_fecha_html : function(fecha){
        var d = new Date(fecha);
        var anio = d.getFullYear();
        var mes = d.getMonth() + 1;
        mes = mes < 10 ? '0'+mes : mes;
        var dia = d.getDate();
        dia = dia < 10 ? '0'+dia : dia;
        return anio+'-'+mes+'-'+dia;
    },

}