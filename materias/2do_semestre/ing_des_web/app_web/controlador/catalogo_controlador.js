//se agrega el modelo de catalogo para obtener los datos
var db = require('../config/db');
var CatalogoModelo = require('../modelo/catalogo_modelo');

var CatalogoControlador = {

    tipoTelefono : function(req,res){
        console.log('***** peticion catalogo tipo telefono');
        //cargamos la query para obtener el catalogo
        var query = 'select * from catalogo_tipo_telefono';
        console.log('***** consulta: ' + query);
        db.query(query,function(error,result){
            if(error){
                console.log('***** error al obtener el catalogo');
                res.json({status : false,
                    msg : ['No se pudo obtener el catalogo']
                });
            }else{
                console.log('***** se obtuvo el catalog con exito');
                res.json({status : true,
                    msg : '',
                    data : result
                });
            }
        });
    }

}

module.exports = CatalogoControlador;