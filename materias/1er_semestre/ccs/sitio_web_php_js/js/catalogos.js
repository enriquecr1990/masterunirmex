var Catalogos = {

    getCatalogoTipoTelefono : function(){
        //se crea el array de objetos para el catalogo de tipos de telefono
        peticion('POST', 'php/controlador/CatalogoTipoTelefono.php',function(){
            if(httpRequets.readyState == 4 && httpRequets.status == 200){
                var tiposTelefono = JSON.parse(httpRequets.response);
                console.log(tiposTelefono);
                var sltTipoTelefono = document.getElementById('sltTipoTelefono');
                var buscarSltTipoTelefono = document.getElementById('buscar_sltTipoTelefono');
                var htmlOpcionesTipoTelefono = '';
                //se recorre el arreglo de opciones del catalog tipo telefono obtenido del ajax
                for(index = 0; index < tiposTelefono.length; index++){
                    htmlOpcionesTipoTelefono += '<option value="'+tiposTelefono[index].id_catalogo_tipo_telefono+'">'+tiposTelefono[index].tipo_telefono+'</option>';
                }
                //se concatena antes del final del select las opciones optenidas
                sltTipoTelefono.insertAdjacentHTML('beforeend',htmlOpcionesTipoTelefono);
                buscarSltTipoTelefono.insertAdjacentHTML('beforeend',htmlOpcionesTipoTelefono);
            }
        });
    }

}