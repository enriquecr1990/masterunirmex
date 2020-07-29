<?php

require_once 'ModeloBase.php';

class CatalogoTipoTelefono extends ModeloBase {

    function __construct(){
        parent::__construct();
    }

    public function getCatalogoTipoTelefono(){
        $this->db->consulta("select * from catalogo_tipo_telefono");
        $resultado = $this->db->resultado();
        return $resultado;
    }

}