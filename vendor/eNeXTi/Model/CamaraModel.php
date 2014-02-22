<?php
namespace Enexti\Model;

class Camara
{
    public $id;
    public $tipo;
    public $title;
    public $descripcion;
    public $posicion;
    
    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->tipo = (isset($data['tipo'])) ? $data['tipo'] : null;
        $this->title  = (isset($data['title'])) ? $data['title'] : null;
        $this->descripcion  = (isset($data['descripcion'])) ? $data['descripcion'] : null;
        $this->posicion  = (isset($data['posicion'])) ? $data['posicion'] : null;
    }
}