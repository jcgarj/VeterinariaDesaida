<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * citas
 */
class citas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $motivo;

    /**
     * @var integer
     */
    private $costo;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return citas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return citas
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set costo
     *
     * @param integer $costo
     *
     * @return citas
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return integer
     */
    public function getCosto()
    {
        return $this->costo;
    }
    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\cliente
     */
    private $cliente;

    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\mascota
     */
    private $mascota;

    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\mvz
     */
    private $mvz;


    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return citas
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set cliente
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\cliente $cliente
     *
     * @return citas
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
     * Set mascota
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\mascota $mascota
     *
     * @return citas
     */
    public function setMascota(\veterinaria\Bundle\veterinariaBundle\Entity\mascota $mascota = null)
    {
        $this->mascota = $mascota;

        return $this;
    }

    /**
     * Get mascota
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\mascota
     */
    public function getMascota()
    {
        return $this->mascota;
    }

    /**
     * Set mvz
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\mvz $mvz
     *
     * @return citas
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
}
