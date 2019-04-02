<?php
namespace PPR\Entity;

use PPR\Core\Model;


/*
*Pregunta
*/

class Pregunta extends Model
{
    private $codpregunta = "";
    private $texto = "";
    private $imagen = "";
    private $tema = "";

    public function __construct()
    {

    }

    public function listAll()
    {
        $conexion = parent::getBdd();
        
        $consulta = "SELECT * FROM pregunta";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function correcta()
    {
        $conexion = parent::getBdd();
        
        $consulta = "SELECT * FROM pregunta";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function getCodpregunta()
    {
        return $this->codpregunta;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getTema()
    {
        return $this->tema;
    }

    public function setCodPregunta($codpregunta)
    {
        $this->codpregunta = $codpregunta ;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto ;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen ;
    }

    public function setTema($tema)
    {
        $this->tema = $tema ;
    }

}