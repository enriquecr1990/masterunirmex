<?php

/* clase encargada de realizar todas las operaciones de la Base de datos
 * consultar registros
 * insertar registros
 * actualizar registros
 * eliminar registros
 * */

//agregamos la clase de Base de datos que contiene la funcion de obtener la configuracion para cada ambiente
include('DatabaseConfig.php');

class DB
{

    //varaibles privadas para almacenar los datos necesario de la configuracion de la BD
    //objeto del mysqli con los datos obtenidos de la clase Database
    private $dbConfig;
    private $mysqli;
    private $sentencia;

    //en el constructor cargamos la configuracion de la BD y creamos la coneccion con la libreria de mysqli y en caso de error
    //mostrar un mensaje en el sistema y salir;
    function __construct()
    {
        try{
            $this->dbConfig = DatabaseConfig::getConfig();
            $this->mysqli = new mysqli($this->dbConfig['host'],$this->dbConfig['user'],$this->dbConfig['password'],$this->dbConfig['data_base'],$this->dbConfig['port']);
            if($this->mysqli->connect_errno){
                echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;die;
            }
        }catch (Exception $ex){
            echo 'Error en el constructor Modelo base';exit;
        }
    }

    function __destruct()
    {
        $this->dbConfig = null;
        $this->mysqli = null;
    }

    public function consulta($consulta){
        try{
            $this->sentencia = $this->mysqli->query($consulta);
        }
        catch (Exception $ex){
            return false;
        }
    }

    public function insertarRegistro($tabla,$values){
        try{
            //obtenemos las llaves y los valores a insertar
            $llavesValores = $this->getClavesYValoresParaInsert($values);
            $llaves = $llavesValores['llaves'];
            $valores = $llavesValores['valores'];
            //creamos el sql para el insert
            $insert = "INSERT INTO $tabla($llaves) VALUES($valores)";
            $this->sentencia = $this->mysqli->query($insert);
            return $this->getUltimoIdInsertado();
        }catch (Exception $ex){
            return false;
        }
    }

    public function actualizarRegistro($tabla,$valuesUpdate,$condicionales){
        try{
            $dataUpdate = $this->getClavesValoresCondicionalesUpdate($valuesUpdate,$condicionales);
            $sets = $dataUpdate['sets'];
            $cdtls = $dataUpdate['cdtls'];
            $update = "UPDATE $tabla SET $sets $cdtls";
            $this->sentencia = $this->mysqli->query($update);
            return true;
        }catch (Exception $ex){
            return false;
        }
    }

    public function eliminarRegistro($tabla,$condionales){
        try{
            $condionalesDelete = $this->getCondicionalesUpdateDelete($condionales);
            $delete = "DELETE FROM $tabla $condionalesDelete";
            return $this->mysqli->query($delete);
        }catch (Exception $ex){
            return false;
        }
    }

    public function getUltimoIdInsertado(){
        return $this->mysqli->insert_id;
    }

    /**
     * @return mixed
     */
    public function getNumeroRegistros()
    {
        return $this->numeroRegistros;
    }

    //funcion para retornar el resultado de la consulta en un arreglo de objetos
    public function resultado(){
        return $this->procesarResultadoObjecto();
    }

    //funcion para retornar el resultado de la consulta en un arreglo de arreglo
    public function resultado_array(){
        return $this->procesarResultadoArray();
    }

    //funcion que convierte el fetch assoc en un arreglo de registros en un array
    protected function procesarResultadoArray(){
        $resultado = array();
        $indexRegistro = 0;
        //ciclo while mientras tenga registros obtenidos
        while($registro = $this->sentencia->fetch_assoc()){
            //iteramos las columnas de informacion y su valor de cada columna
            foreach ($registro as $columna => $valor){
                //guardamos en el resultado de retorno en la posicion de la columna el valor del registro
                $resultado[$indexRegistro][$columna] = $valor;
            }
            $indexRegistro++;
        }
        return $resultado;
    }

    //funcion que convierte el fetch assoc en un arreglo de registros en un objeto
    protected function procesarResultadoObjecto(){
        $resultado = array();
        $indexRegistro = 0;
        while($registro = $this->sentencia->fetch_assoc()){
            //creamos el objeto para asociarlo al arreglo de resultados
            $class = new stdClass();
            foreach ($registro as $columna => $valor){
                //creamos el resultado en la clase la variable columna con su respectivo valor
                $class->$columna = $valor;
            }
            $resultado[$indexRegistro] = $class;
            $indexRegistro++;
        }
        return $resultado;
    }

    //funcion que obtiene las claves y el valor que se usaran para insertar un registro nuevo a determinada tabla
    protected function getClavesYValoresParaInsert($valuesInsert){
        $keys = '';$values = '';//valores de las llaves y el valor que iran hacia el insert
        $index = 1;$max = sizeof($valuesInsert);//para tener un control de los valores
        foreach ($valuesInsert as $key => $value){
            if($index < $max){
                $keys .= ''.$key.',';//para separa por comas los nombres de las columnas de la tabla
                $values .= "'$value',"; //para separar los valores que se almacenaran en la tabla
            }else{
                $keys .= ''.$key;
                $values .= "'$value'";
            }
            $index++;
        }
        return array('llaves' => $keys,'valores' => $values);
    }

    protected function getClavesValoresCondicionalesUpdate($valoresUpdate,$conditionalesUpdate){
        $sets = $this->getValoresUpdate($valoresUpdate);
        $cdtls = $this->getCondicionalesUpdateDelete($conditionalesUpdate);
        return array('sets' => $sets,'cdtls' => $cdtls);
    }

    protected function getValoresUpdate($valuesUpdate){
        $sets = '';
        $index = 1;$max = sizeof($valuesUpdate);
        foreach ($valuesUpdate as $col => $value){
            if($index < $max){
                $sets .= " $col = '$value',";
            }else{
                $sets .= " $col = '$value'";
            }
            $index++;
        }
        return $sets;
    }

    protected function getCondicionalesUpdateDelete($conditionals){
        $index = 1;
        $cdtls = '';
        foreach ($conditionals as $col => $value){
            if($index == 1){
                $cdtls .= " WHERE $col = '$value'";
            }else{
                if(strpos($value,'%') !== false){
                    $cdtls .= " AND $col LIKE '$value'";
                }else{
                    $cdtls .= " AND $col = '$value'";
                }
            }
            $index++;
        }
        return $cdtls;
    }

}