var Operaciones = {

    nuevoContacto : function(){
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
            ValidarComun.agregarMsgValidacion('Se eliminó el contacto con éxito');
            FormatoDatos.showMensajesSistema();
            document.getElementById('registroContacto'+idContacto).remove();
        }
    },

    guardarContacto : function(){
        var validarFormContacto = Validar.formContacto();
        if(!validarFormContacto){
            FormatoDatos.showMensajesSistema();
        }else{
            //se integra la logica para que se guarde el contacto
            ValidarComun.agregarMsgValidacion('Se guardo el contacto con éxito');
            FormatoDatos.showMensajesSistema();
            FormatoDatos.processTrContactoFormulario();
            FormatoDatos.showTableroContacto();
        }
    },

    cancelarContacto : function(){
        var confirmacion = confirm('¿Estás seguro de cancelar?, se perderan los cambios realizados');
        if(confirmacion){
            FormatoDatos.showTableroContacto();
            FormatoDatos.ocultarMensajesSistema();
        }
    }
};