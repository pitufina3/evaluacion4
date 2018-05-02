<?php

require_once ("Persona.php");
require_once ("Pedido.php");

class Cliente extends Persona {

    private $pedidos;


    public function __construct ($nombre,$edad){

        parent::__construct ($nombre, $edad);

        $pedidos = array();

    }

    function getPedidos (){

        return $this->pedidos;

    }

    function setPedidos($pedidos){

        $this->pedidos = $pedidos;

    }

    public function altaPedido ($pedido){

        $this->pedidos[]=$pedido;

    }


    function getMediaPedidos () {

        $suma=0;
        $numeropedidos=0;

        for($i=0; $i < count($pedidos); $i++){

            $suma = $suma + $pedidos[$i]->getMediaPedidos();

        }

        return $suma/$mediapedidos;

    }


}

?>