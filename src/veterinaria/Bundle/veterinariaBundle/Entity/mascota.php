<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * mascota
 */
class mascota
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreM;

    /**
     * @var integer
     */
    private $peso;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $especie;

    /**
     * @var string
     */
    private $raza;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreM
     *
     * @param string $nombreM
     *
     * @return mascota
     */
    public function setNombreM($nombreM)
    {
        $this->nombreM = $nombreM;

        return $this;
    }

    /**
     * Get nombreM
     *
     * @return string
     */
    public function getNombreM()
    {
        return $this->nombreM;
    }

    /**
     * Set peso
     *
     * @param integer $peso
     *
     * @return mascota
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return mascota
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return mascota
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set especie
     *
     * @param string $especie
     *
     * @return mascota
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return string
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set raza
     *
     * @param string $raza
     *
     * @return mascota
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza
     *
     * @return string
     */
    public function getRaza()
    {
        return $this->raza;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\cliente
     */
    private $cliente;


    /**
     * Set cliente
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\cliente $cliente
     *
     * @return mascota
     */
    public function setCliente(\veterinaria\Bundle\veterinariaBundle\Entity\cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\mvz
     */
    private $mvz;


    /**
     * Set mvz
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\mvz $mvz
     *
     * @return mascota
     */
    public function setMvz(\veterinaria\Bundle\veterinariaBundle\Entity\mvz $mvz = null)
    {
        $this->mvz = $mvz;

        return $this;
    }

    /**
     * Get mvz
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\mvz
     */
    public function getMvz()
    {
        return $this->mvz;
    }

    public function __toString()
    {
        return $this->nombreM.' '.$this->especie.' '.$this->raza;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $citas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->citas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cita
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\citas $cita
     *
     * @return mascota
     */
    public function addCita(\veterinaria\Bundle\veterinariaBundle\Entity\citas $cita)
    {
        $this->citas[] = $cita;

        return $this;
    }

    /**
     * Remove cita
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\citas $cita
     */
    public function removeCita(\veterinaria\Bundle\veterinariaBundle\Entity\citas $cita)
    {
        $this->citas->removeElement($cita);
    }

    /**
     * Get citas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCitas()
    {
        return $this->citas;
    }
}
