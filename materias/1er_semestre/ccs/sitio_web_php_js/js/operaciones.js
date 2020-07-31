var Operaciones = {

    busquedaAvanzada : function(){
        busquedaAvanzada = document.getElementsByClassName('busqueda_avanzada');
        if(banderaBusquedaAvanzada){
            banderaBusquedaAvanzada = false;
            for(i = 0; i < busquedaAvanzada.length; i++){
                busquedaAvanzada[i].style.display = 'none';
            }
            lnkBusquedaAvanzada.innerHTML = 'Búsqueda avanzada';
        }else{
            banderaBusquedaAvanzada = true;
            for(i = 0; i < busquedaAvanzada.length; i++){
                busquedaAvanzada[i].style.display = '';
            }
            lnkBusquedaAvanzada.innerHTML = 'Ocultar búsqueda avanzada';
        }
    },

    busquedaContactosForm : function(){
        Datos.getDatosListaContacto();
    },

    nuevoContacto : function(){
        iptIdContacto.value = '';//reiniciamos el valor del idContacto
        FormatoDatos.showFormContacto();
        FormatoDatos.ocultarMensajesSistema();
        spnTituloFormulario.innerHTML = 'Agregar';
        btnLimpiarFormContacto.click();
    },

    modificarContacto : function(dataContacto){
        FormatoDatos.showFormContacto();
        FormatoDatos.ocultarMensajesSistema();
        spnTituloFormulario.innerHTML = 'Modificar';
        /* decodificamos el data de contacto que llego como un string de caracteres codificado en base64 de JS
        * despues lo convertimos en un objeto de contacto
        * nos servira para poner los valores en el formulario de contacto
        * */
        dataContacto = JSON.parse(atob(dataContacto));
        Datos.setFormalarioContacto(dataContacto);
    },

    eliminarContacto : function(idContacto){
        FormatoDatos.ocultarMensajesSistema();
        var confirmacion = confirm('¿Está seguro de eliminar el contacto?, esta operación no se puede revertir');
        if(confirmacion){
            peticion('get','php/controlador/ContactoEliminar.php?idContacto='+idContacto,function(){
                if(httpRequets.readyState == 4 && httpRequets.status == 200){
                    var response = JSON.parse(httpRequets.response);
                    FormatoDatos.procesarMensajesArray(response.msg);
                    FormatoDatos.showMensajesSistema('error');
                    if(response.success){
                        FormatoDatos.showTableroContacto();
                        Datos.getDatosListaContacto();
                    }
                }
            },false, {idContacto : idContacto});
        }
    },

    guardarContacto : function(){
        var validarFormContacto = Validar.formContacto();
        if(!validarFormContacto){
            FormatoDatos.showMensajesSistema('advertencia');
        }else{
            //se integra la logica para que se guarde el contacto
            peticion('post','php/controlador/ContactoNuevoActualizar.php',function(){
                if(httpRequets.readyState == 4 && httpRequets.status == 200){
                    var response = JSON.parse(httpRequets.response);
                    FormatoDatos.procesarMensajesArray(response.msg);
                    FormatoDatos.showMensajesSistema('exito');
                    if(response.success){
                        FormatoDatos.showTableroContacto();
                        Datos.getDatosListaContacto();
                        btnLimpiarFormContactoBusqueda.click();
                    }
                }
            },'frmRegistroContacto');
        }
    },

    cancelarContacto : function(){
        var confirmacion = confirm('¿Estás seguro de cancelar?, se perderan los cambios realizados');
        if(confirmacion){
            FormatoDatos.showTableroContacto();
            FormatoDatos.ocultarMensajesSistema();
            btnLimpiarFormContactoBusqueda.click();
        }
    }
};