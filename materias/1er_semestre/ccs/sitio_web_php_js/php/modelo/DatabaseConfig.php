<?php

//clase que contendra la configuracion de la BD
class DatabaseConfig {

    //funcion estatica para obtener la configuracion de la BD
    public static function getConfig(){
        $db_config = array();

        // switch de $_SERVER['SERVER_NAME'] para cargar la configuracion de la
        // BD para que funcione en local o en la nube
        switch ($_SERVER['SERVER_NAME']){
            case 'enriquecr-masterunir.azurewebsites.net':
                $db_config['host'] = '127.0.0.1';
                $db_config['port'] = '51348';
                $db_config['user'] = 'azure';
                $db_config['password'] = '6#vWHD_$';
                $db_config['data_base'] = 'sitio_php';
                break;
            default:
                $db_config['host'] = 'localhost';
                $db_config['port'] = '3306';
                $db_config['user'] = 'root';
                $db_config['password'] = '';
                $db_config['data_base'] = 'sitio_php';
                break;
        }
        return $db_config;
    }

}