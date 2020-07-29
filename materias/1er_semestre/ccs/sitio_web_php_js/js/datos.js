//variable tipo clase que contendra los datos almacenados en JS
var Datos = {

    //devuelve el array de la lista de contactos que se mostrara en el sistema de agenda
    getDatosListaContacto : function(){
        tbodyListaContactos.innerHTML = '<tr><td colspan="7" >Buscando contactos ...</td></tr>';
        peticion('post', 'php/controlador/ContactoListado.php',
            function(){
                if(httpRequets.readyState == 4 && httpRequets.status == 200){
                    //reemplazamos la informacion anterior por la de la peticion ajax
                    var listaContactos = JSON.parse(httpRequets.response);
                    var htmlListaContactos = '';
                    //validamos si hay registros encontrados
                    if(listaContactos.length == 0){
                        htmlListaContactos = '<tr><td colspan="7">Sin registros encontrados</td></tr>';
                        FormatoDatos.procesarMensajesArray(['Sin registros encontrados']);
                        FormatoDatos.showMensajesSistema('informacion');
                    }else{
                        htmlListaContactos = '';
                        //obtenemos el DOM tbody de la tabla que tendra la lista de contactos en la vista html principal
                        listaContactos.forEach(function(contacto){
                            htmlListaContactos += FormatoDatos.getTrContacto(contacto);
                        });
                    }
                    tbodyListaContactos.innerHTML = htmlListaContactos;

                }
            },'frmBusquedaContacto'
        );
    },

    setFormalarioContacto : function(contacto){
        document.getElementById('idContacto').value = contacto.id;
        document.getElementById('nombre').value = contacto.nombre;
        document.getElementById('paterno').value = contacto.paterno;
        document.getElementById('materno').value = contacto.materno;
        document.getElementById('sltTipoTelefono').value = contacto.id_catalogo_tipo_telefono;
        document.getElementById('numeroTelefono').value = contacto.numero_telefono;
        document.getElementById('nacimiento').value = contacto.nacimiento;
        document.getElementById('correo').value = contacto.correo;
        document.getElementById('facebook').value = contacto.facebook;
        contacto.id_genero == 1 ? document.getElementById('rdoMasculino').checked = true : document.getElementById('rdoFemenino').checked = true;
    },

    getContactoFormulario : function(){
        var idGenero = document.getElementById('rdoMasculino').checked ? 1 : 2;
        return {
            id: document.getElementById('idContacto').value,
            nombre : document.getElementById('nombre').value,
            paterno : document.getElementById('paterno').value,
            materno : document.getElementById('materno').value,
            nacimiento : document.getElementById('nacimiento').value,
            cumpleanios: FormatoDatos.getFechaCumpleanios(document.getElementById('nacimiento').value),
            idGenero : idGenero,
            genero : FormatoDatos.getGenero(idGenero),
            idTipoTelefono : document.getElementById('sltTipoTelefono').value,
            tipoTelefono : FormatoDatos.getTipoNumero(parseInt(document.getElementById('sltTipoTelefono').value)),
            numeroTelefono : document.getElementById('numeroTelefono').value,
            correo : document.getElementById('correo').value,
            facebook : document.getElementById('facebook').value
        };
    }
}