//Variable tipo clase que formatea datos necesario para la vista del html
var FormatoDatos = {

    //muestra el formulario de contacto y oculta el tablero de contactos
    showFormContacto : function(){
        fltFormBusquedaContacto.style.display = 'none'
        fltListaContactos.style.display = 'none'; //se oculta el tablero de contactos
        fltFormNuevoContacto.style.display = 'block'; //se muestra el formulario de contacto
    },

    //oculta el formulario de contacto y muestra el tablero de contactos
    showTableroContacto : function(){
        fltFormBusquedaContacto.style.display = 'block'
        fltListaContactos.style.display = 'block'; //se oculta el tablero de contactos
        fltFormNuevoContacto.style.display = 'none'; //se muestra el formulario de contacto
    },

    showMensajesSistema : function(tipo){
        fltMensajesSistema.style.display = 'block';
        fltMensajesSistema.classList.remove('advertencia');
        fltMensajesSistema.classList.remove('error');
        fltMensajesSistema.classList.remove('exito');
        fltMensajesSistema.classList.remove('informacion');
        fltMensajesSistema.classList.add(tipo);
        ulMsgSistema.innerHTML = FormatoDatos.getHtmlMensajesSistema();
        setTimeout(function(){FormatoDatos.ocultarMensajesSistema()},5000);
    },

    ocultarMensajesSistema : function(){
        fltMensajesSistema.style.display = 'none';
        Validar.msgValidacion = [];
    },

    //funcion para formatear la fecha de cumplieaños a partir de una fecha dada
    getFechaCumpleanios : function(fecha){
        //se dividen en array los elementos de la fecha que se recibe en formato yyyy-mm-dd por el separador - (guion medio)
        fecha = fecha.split('-');
        //se crea la fecha restando un numero al mes dado que el date de JS los meses son del 0 al 11
        var date = new Date(fecha[0],fecha[1] - 1, fecha[2]);
        return date.getDate() + ' de ' + this.getMes(date.getMonth());
    },

    //devuelve el genero masculino o femenino dependiendo del registro del formulario
    getGenero : function(idGenero = 1){
        return idGenero == 1 ? 'Masculino' : 'Femenino';
    },

    //devuelve el tipo de telefono que esta presente en el formulario
    getTipoNumero : function (idTipo){
        var tipo = '';
        switch (idTipo) {
            case 1: tipo = 'Celular';break;
            case 2: tipo = 'Casa';break;
            case 3: tipo = 'Oficina';break;
            case 4: tipo = 'Fax';break;
        }
        return tipo;
    },

    //devuelve el mes correspondiente de la funcion de getMonth() de la clase Date (valores del 0-11)
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

    //devuelve el HTML del registro de la agenda telefonica conforme al objeto recibido de contacto
    getTrContacto : function(contacto){
        //codificamos el objeto de contacto en un string JSON para luego convertirlo en un string de caracteres codificado en base64 de JS
        var dataContacto = btoa(JSON.stringify(contacto));
        return '<tr id="registroContacto'+contacto.id+'">' +
            '   <td>'+ contacto.id+'</td>' +
            '   <td>'+ contacto.nombre + ' ' +contacto.paterno + ' ' + contacto.materno +'</td>' +
            '   <td>'+ contacto.genero + '</td>' +
            '   <td>'+ contacto.cumpleanios +'</td>' +
            '   <td>'+ contacto.tipo_telefono + ': ' +contacto.numero_telefono+'</td>' +
            '   <td>' +
            '       <ul>' +
            '           <li><strong>Correo: </strong>'+contacto.correo+'</li>' +
            '           <li><strong>Facebook: </strong>'+contacto.facebook+'</li>' +
            '       </ul>' +
            '   </td>' +
            '   <td colspan="centrado">' +
            '       <button type="button" class="boton boton-amarillo btnModificarContacto" onclick="Operaciones.modificarContacto(\''+dataContacto+'\')">Modificar</button><br>' +
            '       <button type="button" class="boton boton-rojo btnEliminarContacto" onclick="Operaciones.eliminarContacto(\''+contacto.id+'\')">Eliminar</button>' +
            '   </td>' +
            '</tr>';
    },

    //obtiene el html de los mensajes que se mostraran al sistema
    getHtmlMensajesSistema : function(){
        var htmlMensajes = '<ul class="error">';
        Validar.msgValidacion.forEach(function(msg){
            htmlMensajes += '<li>'+msg+'</li>';
        });
        htmlMensajes += '</ul>';
        return htmlMensajes;
    },

    //funcion que procesa el renglos del contacto desde el formulario y lo agrega o actualiza del tablero de contactos
    processTrContactoFormulario : function(){
        var contactoForm = Datos.getContactoFormulario();
        if(contactoForm.id != ''){ //contacto actualizar
            document.getElementById('registroContacto'+contactoForm.id).remove();
            tbodyListaContactos.insertAdjacentHTML('beforeend',this.getTrContacto(contactoForm));
        }else{ //contacto nuevo
            contactoForm.id = tbodyListaContactos.getElementsByTagName('tr').length + 1;
            tbodyListaContactos.insertAdjacentHTML('beforeend',this.getTrContacto(contactoForm));
        }
    },

    procesarMensajesArray : function(arrayMsg){
        arrayMsg.forEach(function(msg){
            ValidarComun.agregarMsgValidacion(msg);
        });
    },
};