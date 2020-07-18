//se crean las variables globales para todo el sistema que se utilizaran
//variables para cachar los eventos del click de los botones
var fltMensajesSistema = document.getElementById('fltMensajesSistema');
var fltListaContactos = document.getElementById('fltListaContactos');
var fltFormNuevoContacto = document.getElementById('fltFormularioContacto');

var btnNuevoContacto = document.getElementById('btnNuevoContacto');
var btnGuardarContacto = document.getElementById('btnGuardarFormContacto');
var btnCancelarRegistro = document.getElementById('btnCancelarFormContacto');
var btnLimpiarFormContacto = document.getElementById('btnLimpiarFormulario');

var tbodyListaContactos = document.getElementById('tbobyListaContactos');

var spnTituloFormulario = document.getElementById('spnTituloFormulario');

//se crea la funcion de iniciar el JS para que cargue toda la logica del JS para que funcione el sistema de Agenda
function iniciarJS() {
    Principal.index();
}
//se crea una variable de JS para tratarla como tipo Clase, la cual contendra funciones y variables
var Principal = {
    /* funcion index de JS de principal que se encargara de inicializar
    * lo que necesita la pagina hecha por JS
    */

    index : function(){
        Principal.startHTMLCatalogoTipoTelefono();
        Principal.startHTMLListaContacto();
        Principal.startEventsCatch();
    },

    /* funciones que inicializara las variables a usar en el JS de agenda con sus respectivos catch de eventos a ocurrir
     * en el sistema de agenda telefonica
     * */
    startEventsCatch : function(){

        /* mostrar/ocultar componentes del sistema al cargar el sistema
         * se oculta de manera inicial los mensajes del sistema
         * se ocula de manera inicial el formulario de contacto
         * */
        fltMensajesSistema.style.display = 'none';
        fltFormNuevoContacto.style.display = 'none';

        //cachar los eventos de los objetos del DOM creados anteriormente

        //evento para el click del nuevo contacto
        btnNuevoContacto.onclick = function(){Operaciones.nuevoContacto();};

        //evento para el click de guardar contacto
        btnGuardarContacto.onclick = function(){Operaciones.guardarContacto();}

        //evento para el click de cancelar el registro del elemento
        btnCancelarRegistro.onclick = function(){Operaciones.cancelarContacto();}

    },

    //funcion que inicializa el select de tipo telefono
    startHTMLCatalogoTipoTelefono : function(){
        /* procesar el catalogo de tipos telefono
        * se crea la variable que contendra el array de tipos de telefono
        * se crea el objeto del select que tendra las opciones (proviene del DOM)
        * se crea el html que tendra las opciones del select
        * */
        var tiposTelefono = Catalogos.getCatalogoTipoTelefono();
        var sltTipoTelefono = document.getElementById('sltTipoTelefono');
        var htmlOpcionesTipoTelefono = '';
        //se recorre el arreglo de opciones
        for(index = 0; index < tiposTelefono.length; index++){
            htmlOpcionesTipoTelefono += '<option value="'+tiposTelefono[index].valor+'">'+tiposTelefono[index].etiqueta+'</option>';
        }
        //se concatena antes del final del select las opciones optenidas
        sltTipoTelefono.insertAdjacentHTML('beforeend',htmlOpcionesTipoTelefono);
    },

    //funcion que inicializa los datos que iran a la tabla de lista de contactos
    startHTMLListaContacto : function (){
        //obtenemos los datos a utilizar para mostrarlos a la tabla de lista de contactos
        var listaContactos = Datos.getDatosListaContacto();
        //obtenemos el DOM tbody de la tabla que tendra la lista de contactos en la vista html principal
        var htmlListaContactos = '';
        listaContactos.forEach(function(contacto){
            htmlListaContactos += FormatoDatos.getTrContacto(contacto);
        });
        tbodyListaContactos.insertAdjacentHTML('beforeend',htmlListaContactos);
    },
};
