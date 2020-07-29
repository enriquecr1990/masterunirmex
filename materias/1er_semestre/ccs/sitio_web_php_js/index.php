<?php

include_once ('paginas/header.php');
include_once ('paginas/busqueda_contacto.php');
include_once ('paginas/tablero_contacto.php');
include_once ('paginas/formulario_contacto.php');
include_once ('paginas/footer.php');

?>

<!--
Minisistema de registro de contactos que tiene funcionalidad tipo CRUD (Consultar, Registrar, Actualizar y Eliminar)
**************** FUNCIONALIDAD:
1.  En la pantalla principal se muestra un tablero con los contactos registrados en la BD que tenga actualmente
2.  En el index del sitio se aprecia el botón “Nuevo Contacto” que al dar clic se mostrará un formulario de contacto
    (se usa para nuevo y modificar) y en los registros el botón de modificar y eliminar.
3.  Para el nuevo/modificar contacto, se hacen uso de las validaciones de lado del cliente en HTML5, por JavaScript y de
    lado del servidor backend por medio del uso de un helper de validaciones que se habia hecho en la actividad de sitio_web_php
    en el formulario de contacto, para los apellidos, telefeno, correo, link de Facebook se hace uso de expresiones
    regulares para aceptar cierto tipo de formatos en los campos. Los datos de modificar
4.  La información de modificar/eliminar datos de contacto, viajan codificados en Base64 para pasar un objeto al JS.
5.  Los JavaScript estan divididos conforme al tipos de operaciones que realiza cada JS, como los catalogos, los datos,
    las operaciones que podrian ser las opciones de guardar, los eventos de los elementos DOM del HTML y el formateo
    de datos a HTML, y del JavaScript ajax.js donde se realiza el llamado ajax al servidor backend

**************** DISEÑO MVC:
1.  Se llevo el diseño del mini sistema llevando el concepto de MVC en su version mas simple; procurando tener una
    estructura en los directorios y archivos. Por definicion, el Modelo es lo que se encarga de tener todo el guardado
    de la información hacia la BD, el controlador es el encargado de delegar las peticiones hacia el modelo  las cuales
    se reciben desde la vista, hacer uso de validaciones/helpers/... y devolver la informacion necesaria a la vista
    ya formateada, es decir en formato JSON/HTML... segun sea el caso.
    Por último la vista, es unicamente la parte visual del sistema, el HTML, CSS y el JS.
2.  Modelo:
        *   /php/modelo/DatabaseConfig.php: es la clase que contiene la configuracion de acceso a la BD (host, usuario,
            password, base de datos) ademas de que se agrego un switch para que funcione con la configuracion local o la
            del servidor de la nube
        *   /php/modelo/DB.php: Es la clase encargada de realizar todas las operaciones basicas SQL por medio de la
            clase mysqli de PHP, esas operaciones ya estan listas para ser utilizadas para cualquier tabla y para
            cualquier operación básica (SELECT, INSERT, UPDATE y DELETE)
        *   /php/modelo/ModeloBase: clase que unicamente tiene como atributo la clase DB y que se encarga de inicializarla
        *   /php/modelo/CatalogoTipoTelefono: clase que obtiene los registros del catalogo tipo telefono, extiende de la
            clase ModeloBase para hacer uso de la Clase DB que tiene las operaciones de la BD
        *   /php/modelo/ContactoModelo: clase que extiende de la clase ModeloBase para hacer uso de la Clase DB que
            tiene las operaciones de la BD; para esta clase se tiene las funciones de obtener el listado de contactos,
            guardar un contacto (nuevo/actualizar) y eliminar el contacto
3.  Controlador:
        *   /php/controlador/ContactoFunciones.php: controlador comun donde llegaran todas las peticiones CRUD del sistema
            y estas devolveran la informacion en un objeto/array de informacion; se auxilia de PHP's independientes
            de cada operación (/php/controlador/ContactoListado.php, /php/controlador/ContactoNuevoActualizar.php,
            /php/controlador/ContactoEliminar.php) y devolveran en formato JSON la informacion obtenida.
        *   /php/controlador/CatalogoTipoTelefono.php: controlador para obtener unicamente el listado del catalogo
            tipo telefono disponibles.
4.  Vista:
        *   /paginas/header.php: vista general de la cabecera de la página HTML
        *   /paginas/footer.php: vista general del píe de página HTML
        *   /paginas/tablero_contacto.php: vista del tablero de resultados de contacto
        *   /paginas/formulario_contacto.php: vista del formulario de contacto
        *   /paginas/busqueda_contacto.php: vista del formulario de busqueda de contacto
        *   /css/comun.css: contiene todo el CSS basico del sitema para que tenga un mejor aspecto visual.
        *   /js/ajax.js: JS que contiene la funcionalidad de hacer la peticion AJAX
            para este JS, se creo una funcion comun llamada "peticion" y recibe como paramentros el "tipo" puede ser
            get, post, ..., "URL" de la peticion, una funcion para que debe hacer una vez terminada la peticion AJAX,
            opcionalmente el ID del formulario para obtener los valores de los input/select/... contenidos en el
            formulario
        *   /js/catalogos.js: JS que manda a llamar la funcion de peticion contenida en el ajax.js y lo pinta al HTML
            correspondiente del formulario de registro/busqueda de contactos.
        *   /js/datos.js: JS que formatea los datos necesario hacia el HTML que pudo haber obtenido de un AJAX o de algun
            DOM del HTML desde un evento (por ejemplo el modificar)
        *   /js/formato_datos.js: igualmente formatea los datos hacia el HTML, ademas de tener la funcionalidad de la parte
            visual de los mensajes, ocultar informacion de la vista...
        *   /js/operaciones.js: JS que contiene todas las operaciones del sistema del frontend (nuevoContacto,
            modificarContacto, eliminarContacto, cancelarContacto, busquedaContacto, busquedaAvanzada...)
        *   /js/principal.js: contiene el iniciarJS de toda la operativdad del sistema
        *   /js/validar.js: contiene las validaciones realizar via JS en el frontend
5.  BD: se agrega el script para ejecutar en el equipo local para que tenga funcionalidad el sistema
 -->