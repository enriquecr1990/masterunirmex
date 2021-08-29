//cargamos la libreria de express para usar lo de las rutas
var express = require('express');
//inicializamos la variable de rutas por medion de la funcion de express.router()
var router = express.Router();
//cargamos el controlador requerido para el catalogo
var CatalogoController = require('../controlador/catalogo_controlador');

//iniciamos las rutas del catalogo
router.get('/tipo_telefono/listar', CatalogoController.tipoTelefono);

module.express = router;