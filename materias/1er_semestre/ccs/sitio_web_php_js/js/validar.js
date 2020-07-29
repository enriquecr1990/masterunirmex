var Validar = {

    msgValidacion : [],

    formContacto : function(){
        var formEsValido = true;
        ValidarComun.elimiarErrorSistema();
        if(!ValidarComun.validarCampoTexto('nombre')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoTexto('paterno','apellido paterno')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoTexto('materno','apellido materno')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoRadioChecked('idGenero','genero')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoTexto('sltTipoTelefono','tipo telefono')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoTexto('numeroTelefono','número de teléfono')
            || !ValidarComun.validarTelefono('numeroTelefono')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoTexto('nacimiento','fecha de nacimiento')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoTexto('correo')
            || !ValidarComun.validarCorreo('correo')){
            formEsValido = false;
        }if(!ValidarComun.validarCampoTexto('facebook')
            || !ValidarComun.validarLinkFacebook('facebook')){
            formEsValido = false;
        }
        return formEsValido;
    },

};

var ValidarComun = {

    elimiarErrorSistema : function(){
        Validar.msgValidacion = [];
        errors = document.getElementsByClassName('error');
        for(i = 0; i < errors.length; i++){
            errors[i].remove();
        }
    },

    agregarMsgValidacion : function(msg){
        Validar.msgValidacion.push(msg);
    },

    validarCampoTexto : function(idHtml,tag = false,validarCorreo = false){
        var esValido = true;
        var campo = document.getElementById(idHtml);
        tag = tag ? tag : idHtml;
        if(campo.value == null || campo.value == undefined || campo.value == '' || campo.value.trim() == ''){
            esValido = false;
            this.agregarMsgValidacion('El campo '+tag+' es requerido');
        }
        return esValido;
    },

    validarCampoRadioChecked : function(name,tag){
        var esValido = false;
        var camposRadio = document.getElementsByName(name);
        camposRadio.forEach(function(campo){
            if(campo.checked){
                esValido = true;
            }
        });
        if(!esValido){
            this.agregarMsgValidacion('El campo '+tag+' es requerido');
        }
        return esValido;
    },

    validarTelefono : function(idHtml){
        var esValido = true;
        var campo = document.getElementById(idHtml);
        if(campo.value.match(/^[(]{0,1}[0-9 -]{3,4}[)]{0,1}[0-9 -]{7,11}$/) == null){
            esValido = false;
            ValidarComun.agregarMsgValidacion('El campo teléfono es requerido o es un número inválido (puede tener parentesis/espacio/guiones medios o solo números)');
        }
        return esValido;
    },

    validarCorreo : function(idHtml){
        var esValido = true;
        var campo = document.getElementById(idHtml);
        if(campo.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/) == null){
            esValido = false;
            ValidarComun.agregarMsgValidacion('El campo correo electrónico es requerido o es un correo inválido');
        }
        return esValido;
    },

    validarLinkFacebook : function(idHtml){
        var esValido = true;
        var campo = document.getElementById(idHtml);
        if(campo.value.match(/^https:\/\/www.facebook.com\/[a-zA-Z0-9_.&?=\/]*$/) == null){
            esValido = false;
            ValidarComun.agregarMsgValidacion('Por favor, introduce un link de facebook válido');
        }
        return esValido;
    }

};