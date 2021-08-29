<?php

require_once 'ModeloBase.php';

class CarritoModel extends ModeloBase{

    private $msg;

    function __construct()
    {
        parent::__construct();
        $this->msg = [];
    }

    function __destruct()
    {
        parent::__destruct(); // TODO: Change the autogenerated stub
        $this->msg =[];
    }

    public function carritoCesta($idUsuario){
        try{
            $query = "select * from carrito c where c.usuario_id = $idUsuario";
            $this->db->consulta($query);
            return $this->db->resultado();
        }catch (Exception $ex){
            $this->msg[] = 'Hubo un error en el sistema "Modelo", favor de intentar más tarde';
            return false;
        }
    }

    public function agregarProducto($data){
        try{
            $query = "select 
                    * 
                from carrito c 
                    where c.producto_id = ".$data['id_producto']
                ." and c.usuario_id = ".$data['usuario_id'];
            $this->db->consulta($query);
            $cesta = $this->db->resultado_row();
            if(is_object($cesta)){
                //actualizamos la cesta
                $cantidad_producto = (int) $cesta->cantidad + (int) $data['cantidad'];
                $this->db->actualizarRegistro('carrito',
                    array('cantidad' => $cantidad_producto, 'fecha' => date('Y-m-d H:i:s')),
                    array('producto_id' => $data['id_producto'], 'usuario_id' => $data['usuario_id']));
            }else{
                //insertamos el producto en la cesta
                $this->db->insertarRegistro('carrito',
                    array('cantidad' => $data['cantidad'],'producto_id' => $data['id_producto'], 'usuario_id' => $data['usuario_id'], 'fecha' => date('Y-m-d H:i:s'))
                );
            }
            return true;
        }catch (Exception $ex){
            $this->msg[] = 'Hubo un error en el sistema "Modelo", favor de intentar más tarde';
            return false;
        }
    }

    public function eliminarProductoCesta($data){
        try{
            $this->db->eliminarRegistro('carrito',$data);
            return true;
        }catch (Exception $ex){
            $this->msg[] = 'Hubo un error en el sistema "Modelo", favor de intentar más tarde';
            return false;
        }
    }

    public function registrarCompra($data){
        $this->db->insertarRegistro('compra',$data);
        return $this->registrarCompraEstatus($data['folio'],6);
    }

    public function actualizarCompraFolio($folio,$data){
        return $this->db->actualizarRegistro('compra',$data,array('folio' => $folio));
    }

    public function obtenerCompraFolio($folio){
        $this->db->consulta("select * from compra c where c.folio = '$folio'");
        return $this->db->resultado_row();
    }

    public function registrarCompraEstatus($folio,$estatus = 6){
        $compra = $this->obtenerCompraFolio($folio);
        return $this->db->insertarRegistro('compra_historia_estatus',array('compra_id' => $compra->id,'cat_compra_estatus_id' => $estatus,'fecha' => date('Y-m-d H:i:s')));
    }

    public function insertarCompraProducto($data){
        return $this->db->insertarRegistro('compra_producto',$data);
    }

}