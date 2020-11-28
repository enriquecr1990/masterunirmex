//variables que se usaran para la applicacion
var express = require('express'); //se agrega el express para la app web
var bodyParser = require('body-parser');//se agrega el body parser para poder recibir los datos de un formulario por medio de un post
var db = require('./config/db');
var ExtraQuery = require('./helper/criterios_query');
var Validar = require('./helper/valida');


//inicializacion de la app por medio de express
var app = express();
//se codifica el post para que lo acepte como una variante de los datos json application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json());

//para que tome el sitio de front destinado para el crud de contactos
app.use(express.static('public'));

// Configurar cabeceras y cors para que pueda procesar las peticiones que no sean del host de la app en node js
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Authorization, X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Allow-Request-Method');
    res.header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');
    res.header('Allow', 'GET, POST, OPTIONS, PUT, DELETE');
    next();
});

//ruta del index para el servidor de node js
app.get('/',function(req,res){
    res.send('Node JS running');
});

//apartado de rutas para el catalogo de tipo de telefonos
app.post('/catalogo/tipo_telefono/listar',function(req,res){
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
});

//apartado de las rutas para el CRUD de contacto
//consulta de contactos
app.post('/contacto/listado',function(req,res){
    console.log('***** peticion para listar contactos');
    var query_base = "select c.*, if(c.id_genero = 1, 'Masculino','Femenino') genero, ctt.tipo_telefono " +
        "from contacto c inner join catalogo_tipo_telefono ctt on ctt.id_catalogo_tipo_telefono = c.id_catalogo_tipo_telefono";
    var extra_query = ExtraQuery.form_busqueda(req.body);
    console.log('***** consulta: '+query_base + extra_query);
    db.query(query_base + extra_query,function(error, result){
        if(error){
            console.log('***** error al consultar los contactos');
            res.json({status : false,
                msg : ['No se pudo obtener el listado de contactos']
            });
        }else{
            console.log('***** se obtuvo el catalog con exito');
            res.json({status : result.length == 0 ? false : true,
                msg : result.length == 0 ? ['Sin registros encontrados'] : [],
                data : result
            });
        }
    });
});

//guardar contacto
app.post('/contacto/guardar',function(req,res){
    console.log('***** peticion para guardar contacto');
    Validar.msg_validacion = [];
    if(Validar.form_contacto(req.body)){
        var contacto = {
            id : req.body.id_contacto,
            nombre : req.body.nombre,
            paterno : req.body.paterno,
            materno : req.body.materno,
            id_genero : req.body.id_genero,
            nacimiento : req.body.nacimiento,
            id_catalogo_tipo_telefono : req.body.id_tipo_telefono,
            numero_telefono : req.body.numero,
            correo : req.body.email,
            facebook : req.body.facebook,
        };
        var query = "INSERT INTO contacto set ?";
        if(contacto.id != '' && contacto.id != 0){
            query = "UPDATE contacto SET ? WHERE id="+contacto.id;
        }
        console.log('***** consulta: ' + query);
        db.query(query,contacto,function(error,result){
            if(error){
                console.log('***** error al guardar contacto');
                res.json({status : false,
                    msg : ['No se pudo guardar contacto, intentar más tarde']
                });
            }else{
                console.log('***** se guardo el contacto con exito');
                res.json({status : true,
                    msg : ['Se guardo el contacto con éxito'],
                });
            }
        });
    }else{
        console.log('***** No paso la validación del formulario');
        res.json({status : false,
            msg : Validar.msg_validacion,
        });
    }
});

//ruta para eliminar contacto
app.get('/contacto/eliminar/:id',function(req,res){
    console.log('***** peticion para eliminar contacto');
    var query = 'DELETE FROM contacto WHERE id = ' + req.params.id;
    console.log('***** consulta: ' + query);
    db.query(query,function(error,result){
        if(error){
            console.log('***** error al eliminar contacto');
            res.json({status : false,
                msg : ['No se pudo guardar contacto, intentar más tarde']
            });
        }else{
            console.log('***** se elimino el contacto con exito');
            res.json({status : true,
                msg : ['Se elimino el contacto con éxito'],
            });
        }
    });
});

//se agrega el listen para arrancar el servidor en el puerto 8080
app.listen(8080,'192.168.1.110',function(){
    console.log('***** Se inicio el servidor correctamente'); 
});