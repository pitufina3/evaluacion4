<?php

class Pedido {


    private $fecha;

    private $media;


    public function __construct ($fecha,$media) {

        $this->fecha =$fecha;

        $this->media =$media; 

    }

    function setFecha ($fecha) {

        $this->fecha= $fecha;

    }

    function getFecha() {

        return $this->fecha;

    }

    function setMedia ($media) {

        $this->media= $media;

    }

    function getMedia() {

        return $this->media;

    }

    function mostrar () {


        echo "Fecha :".$this->getFecha();

        echo "<br>";

        echo "Media :".$this->getMedia();

        echo "<br>";

    }

}