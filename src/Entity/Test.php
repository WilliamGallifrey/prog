<?php
namespace PPR\Entity;

use PPR\Core\Model;


/*
*Test
*/

class Test extends Model
{
    private $id = "";
    private $nombre = "";
    private $foo = "";

    public function __construct()
    {

    }

    public function listAll()
    {
        $conexion = parent::getBdd();
        
        $consulta = "SELECT * FROM test";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function generarTest($id)
    {
        $conexion = parent::getBdd();
        $consulta = "SELECT p.texto AS ptexto,p.imagen,p.tema, r.codrespuesta,r.texto AS rtexto, r.correcta FROM testxpregunta txp JOIN pregunta p ON txp.preguntaid = p.codpregunta JOIN respuesta r ON r.pregunta = p.codpregunta where txp.testid = $id";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function getPreguntas($tema)
    {
        $conexion = parent::getBdd();
        
        $consulta = "SELECT * FROM pregunta WHERE tema = $tema LIMIT 30";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function getNombreid($id)
    {
        $conexion = parent::getBdd();
        
        $consulta = "SELECT nombre FROM test WHERE id = $id";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getFoo()
    {
        return $this->foo;
    }

    public function setId($id)
    {
        $this->id = $id ;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre ;
    }

    public function setFoo($foo)
    {
        $this->foo = $foo ;
    }

}