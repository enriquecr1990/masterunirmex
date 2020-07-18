//variable tipo clase que contendra los datos almacenados en JS
var Datos = {

    //devuelve el array de la lista de contactos que se mostrara en el sistema de agenda
    getDatosListaContacto : function(){
        return [
            {
                id: 1,
                nombre : 'Enrique',
                paterno : 'Corona',
                materno : 'Ricaño',
                nacimiento : '1990-04-06',
                cumpleanios : FormatoDatos.getFechaCumpleanios('1990-04-06'),
                idGenero : 1,
                genero : FormatoDatos.getGenero(1),
                idTipoTelefono : 2,
                tipoTelefono : FormatoDatos.getTipoNumero(2),
                numeroTelefono : '246 757 5099',
                correo : 'enrique_cr1990@hotmail.com',
                facebook : 'https://www.facebook.com/un_face'
            },
            {
                id: 2,
                nombre : 'Gamaliel',
                paterno :'Ricaño',
                materno : 'Flores',
                nacimiento : '1980-10-14',
                cumpleanios : FormatoDatos.getFechaCumpleanios('1980-10-14'),
                idGenero : 1,
                genero : FormatoDatos.getGenero(1),
                idTipoTelefono : 2,
                tipoTelefono : FormatoDatos.getTipoNumero(1),
                numeroTelefono : '222 123 88 74',
                correo : 'gama1980@gmail.com',
                facebook : 'https://www.facebook.com/otro_face'
            },
            {
                id: 3,
                nombre : 'Vianey Adriana',
                paterno:'Montiel',
                materno : 'Herrera',
                nacimiento: '1995-09-09',
                cumpleanios: FormatoDatos.getFechaCumpleanios('1995-09-09'),
                idGenero : 2,
                genero : FormatoDatos.getGenero(2),
                idTipoTelefono : 2,
                tipoTelefono : FormatoDatos.getTipoNumero(2),
                numeroTelefono : '241 222 3399',
                correo : 'vianeyan@gmail.com',
                facebook : 'https://www.facebook.com/un_otro_face'
            },
        ];
    },

    setFormalarioContacto : function(contacto, esNuevo = true){
        document.getElementById('idContacto').value = contacto.id;
        document.getElementById('nombre').value = contacto.nombre;
        document.getElementById('paterno').value = contacto.paterno;
        document.getElementById('materno').value = contacto.materno;
        document.getElementById('sltTipoTelefono').value = contacto.idTipoTelefono;
        document.getElementById('numeroTelefono').value = contacto.numeroTelefono;
        document.getElementById('nacimiento').value = contacto.nacimiento;
        document.getElementById('correo').value = contacto.correo;
        document.getElementById('facebook').value = contacto.facebook;
        contacto.idGenero == 1 ? document.getElementById('rdoMasculino').checked = true : document.getElementById('rdoFemenino').checked = true;
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