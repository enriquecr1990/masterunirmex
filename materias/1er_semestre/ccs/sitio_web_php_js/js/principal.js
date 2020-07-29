//se crean las variables globales para todo el sistema que se utilizaran
//variables para cachar los eventos del click de los botones
var fltMensajesSistema = document.getElementById('fltMensajesSistema');
var fltListaContactos = document.getElementById('fltListaContactos');
var fltFormNuevoContacto = document.getElementById('fltFormularioContacto');
var fltFormBusquedaContacto = document.getElementById('cntBusquedaContacto');

var btnNuevoContacto = document.getElementById('btnNuevoContacto');
var btnGuardarContacto = document.getElementById('btnGuardarFormContacto');
var btnCancelarRegistro = document.getElementById('btnCancelarFormContacto');
var btnLimpiarFormContacto = document.getElementById('btnLimpiarFormulario');
var btnBuscarListaContacto = document.getElementById('btnBuscarFormContacto');
var lnkBusquedaAvanzada = document.getElementById('lnkBusquedaAvanzada');

var iptIdContacto = document.getElementById('idContacto');

var tbodyListaContactos = document.getElementById('tbobyListaContactos');

var spnTituloFormulario = document.getElementById('spnTituloFormulario');

var ulMsgSistema = document.getElementById('ulMsgSistema');

var banderaBusquedaAvanzada = false;

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

        //evento para el click del link de busqueda avanzada
        lnkBusquedaAvanzada.onclick = function(){Operaciones.busquedaAvanzada();}

        //evento para el click del boton de buscar contacto en base al formulario
        btnBuscarListaContacto.onclick = function(){Operaciones.busquedaContactosForm()};

    },

    //funcion que inicializa el select de tipo telefono
    startHTMLCatalogoTipoTelefono : function(){
        /* se inicializa el html en base a la peticion ajax que se encuentra en catalogos.js */
        Catalogos.getCatalogoTipoTelefono();
    },

    //funcion que inicializa los datos que iran a la tabla de lista de contactos
    startHTMLListaContacto : function (){
        //obtenemos los datos a utilizar para mostrarlos a la tabla de lista de contactos
        //manejamos el setTimeOut para darle tiempo de terminar de cargar el catalogo de tipo telefono que se utilizara
        setTimeout(function(){
            Datos.getDatosListaContacto();
        },500);
    },
};
