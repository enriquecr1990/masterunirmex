//se agregan la variable de la conexion de la BD
var db = require('../config/db');

var CatalogoModelo = {

    tipoTelefono : function(){
        console.log('***** CatalogoModelo -> tipoTelefono');
        //cargamos la query para obtener el catalogo
        var query = 'select * from catalogo_tipo_telefono';
        console.log('***** consulta: ' + query);
        var responseModel = {};
        db.query(query,function(error,result){
            if(error){
                console.log('***** error al obtener el catalogo');
                responseModel = {status : false,
                    msg : ['No se pudo obtener el catalogo']
                };
            }else{
                console.log('***** se obtuvo el catalog con exito');
                responseModel = {status : true,
                    msg : '',
                    data : result
                };
            }
        });
        console.log(responseModel);
        return responseModel;
    }

}

module.exports = CatalogoModelo;