const { throws } = require('assert');
const mysql = require('mysql');

//creamos la configuracion para la conexión de la BD
const conexionDB = mysql.createConnection({
    host : 'localhost',
    user : 'root',
    password : '',
    database : 'sitio_php'
});

//nos conectamos a la BD
conexionDB.connect(function(error){
    if(error){
        throw error;
    }
    console.log('***** nos conectamos a la BD con exito'); 
});

//exportamos el modulo de la conexion de la BD
module.exports = conexionDB;