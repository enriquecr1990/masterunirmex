<?php

require_once 'ModeloBase.php';

class ContactoModelo extends ModeloBase{

    function __construct(){
        parent::__construct();
    }

    public function getListaContactos($formBusqueda){
        $whereAdicionales = $this->getCriteriosAdicionales($formBusqueda);
        $consulta = "select 
                c.*,ctt.tipo_telefono 
            from contacto c
                inner join catalogo_tipo_telefono ctt on ctt.id_catalogo_tipo_telefono = c.id_catalogo_tipo_telefono 
            where 1=1 $whereAdicionales";
        $this->db->consulta($consulta);
        return $this->db->resultado();
    }

    public function guardarContacto($formContacto){
        $contacto = array(
            'nombre' => $formContacto['nombre'],
            'paterno' => $formContacto['paterno'],
            'materno' => $formContacto['materno'],
            'nacimiento' => $formContacto['nacimiento'],
            'id_genero' => $formContacto['idGenero'],
            'correo' => $formContacto['correo'],
            'facebook' => $formContacto['facebook'],
            'id_catalogo_tipo_telefono' => $formContacto['idTipoTelefono'],
            'numero_telefono' => $formContacto['numeroTelefono'],
        );
        if(isset($formContacto['id']) && $formContacto['id'] != ''){
            return $this->db->actualizarRegistro('contacto',$contacto,array('id' => $formContacto['id']));
        }else{
            return $this->db->insertarRegistro('contacto',$contacto);
        }
    }

    public function eliminarContacto($idContacto){
        return $this->db->eliminarRegistro('contacto',array('id' => $idContacto));
    }

    /*
     * */

    protected function getCriteriosAdicionales($formBusqueda){
        $criteriosAdicionales = '';
        if(isset($formBusqueda['buscar_nombre']) && $formBusqueda['buscar_nombre'] != ''){
            $criteriosAdicionales .= " and ( c.nombre like '%".$formBusqueda['buscar_nombre']."%' or c.paterno like '%".$formBusqueda['buscar_nombre']."%' or c.materno like '%".$formBusqueda['buscar_nombre']."%' )";
        }if(isset($formBusqueda['buscar_id_genero']) && $formBusqueda['buscar_id_genero'] != ''){
            $criteriosAdicionales .= " and c.id_genero = ".$formBusqueda['buscar_id_genero'];
        }if(isset($formBusqueda['buscar_numeroTelefono']) && $formBusqueda['buscar_numeroTelefono'] != ''){
            $criteriosAdicionales .= " and c.numero_telefono = ".$formBusqueda['buscar_numeroTelefono'];
        }if(isset($formBusqueda['buscar_nacimiento']) && $formBusqueda['buscar_nacimiento'] != ''){
            $criteriosAdicionales .= " and c.nacimiento = '".$formBusqueda['buscar_nacimiento']."'";
        }if(isset($formBusqueda['buscar_idTipoTelefono']) && $formBusqueda['buscar_idTipoTelefono'] != ''){
            $criteriosAdicionales .= " and c.id_catalogo_tipo_telefono = ".$formBusqueda['buscar_idTipoTelefono'];
        }
        return $criteriosAdicionales;
    }

}