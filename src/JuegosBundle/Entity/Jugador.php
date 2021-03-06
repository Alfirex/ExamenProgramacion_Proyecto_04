<?php

namespace JuegosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jugador
 *
 * @ORM\Table(name="jugador")
 * @ORM\Entity(repositoryClass="JuegosBundle\Repository\JugadorRepository")
 */
class Jugador
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="juego", type="string", length=255)
     */
    private $juego;

    /**
     * @var string
     *
     * @ORM\Column(name="especializacion", type="string", length=255)
     */
    private $especializacion;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
    * Many Jugador have Many Equipo.
    * @ORM\ManyToMany(targetEntity="Equipo", mappedBy="jugador")
    */
   private $equipo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Jugador
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Jugador
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set juego
     *
     * @param string $juego
     *
     * @return Jugador
     */
    public function setJuego($juego)
    {
        $this->juego = $juego;

        return $this;
    }

    /**
     * Get juego
     *
     * @return string
     */
    public function getJuego()
    {
        return $this->juego;
    }

    /**
     * Set especializacion
     *
     * @param string $especializacion
     *
     * @return Jugador
     */
    public function setEspecializacion($especializacion)
    {
        $this->especializacion = $especializacion;

        return $this;
    }

    /**
     * Get especializacion
     *
     * @return string
     */
    public function getEspecializacion()
    {
        return $this->especializacion;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Jugador
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add equipo
     *
     * @param \JuegosBundle\Entity\Equipo $equipo
     *
     * @return Jugador
     */
    public function addEquipo(\JuegosBundle\Entity\Equipo $equipo)
    {
        $equipo->addJugador($this);
        $this->equipo[] = $equipo;

        return $this;
    }

    /**
     * Remove equipo
     *
     * @param \JuegosBundle\Entity\Equipo $equipo
     */
    public function removeEquipo(\JuegosBundle\Entity\Equipo $equipo)
    {
        $this->equipo->removeElement($equipo);
    }

    /**
     * Get equipo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Jugador
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function __toString()
    {
        return $this->nombre;
    }
}
