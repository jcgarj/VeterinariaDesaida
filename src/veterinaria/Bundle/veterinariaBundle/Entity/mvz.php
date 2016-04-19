<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * mvz
 */
class mvz
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreMvz;

    /**
     * @var string
     */
    private $appatMvz;

    /**
     * @var string
     */
    private $apmatMvz;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var integer
     */
    private $noExt;

    /**
     * @var integer
     */
    private $noInt;

    /**
     * @var string
     */
    private $colonia;


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
     * Set nombreMvz
     *
     * @param string $nombreMvz
     *
     * @return mvz
     */
    public function setNombreMvz($nombreMvz)
    {
        $this->nombreMvz = $nombreMvz;

        return $this;
    }

    /**
     * Get nombreMvz
     *
     * @return string
     */
    public function getNombreMvz()
    {
        return $this->nombreMvz;
    }

    /**
     * Set appatMvz
     *
     * @param string $appatMvz
     *
     * @return mvz
     */
    public function setAppatMvz($appatMvz)
    {
        $this->appatMvz = $appatMvz;

        return $this;
    }

    /**
     * Get appatMvz
     *
     * @return string
     */
    public function getAppatMvz()
    {
        return $this->appatMvz;
    }

    /**
     * Set apmatMvz
     *
     * @param string $apmatMvz
     *
     * @return mvz
     */
    public function setApmatMvz($apmatMvz)
    {
        $this->apmatMvz = $apmatMvz;

        return $this;
    }

    /**
     * Get apmatMvz
     *
     * @return string
     */
    public function getApmatMvz()
    {
        return $this->apmatMvz;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return mvz
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set noExt
     *
     * @param integer $noExt
     *
     * @return mvz
     */
    public function setNoExt($noExt)
    {
        $this->noExt = $noExt;

        return $this;
    }

    /**
     * Get noExt
     *
     * @return integer
     */
    public function getNoExt()
    {
        return $this->noExt;
    }

    /**
     * Set noInt
     *
     * @param integer $noInt
     *
     * @return mvz
     */
    public function setNoInt($noInt)
    {
        $this->noInt = $noInt;

        return $this;
    }

    /**
     * Get noInt
     *
     * @return integer
     */
    public function getNoInt()
    {
        return $this->noInt;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return mvz
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }
    /**
     * @var string
     */
    private $delegacion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $correo;


    /**
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return mvz
     */
    public function setDelegacion($delegacion)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return mvz
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return mvz
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mascota;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mascota = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mascotum
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\mascota $mascotum
     *
     * @return mvz
     */
    public function addMascotum(\veterinaria\Bundle\veterinariaBundle\Entity\mascota $mascotum)
    {
        $this->mascota[] = $mascotum;

        return $this;
    }

    /**
     * Remove mascotum
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\mascota $mascotum
     */
    public function removeMascotum(\veterinaria\Bundle\veterinariaBundle\Entity\mascota $mascotum)
    {
        $this->mascota->removeElement($mascotum);
    }

    /**
     * Get mascota
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMascota()
    {
        return $this->mascota;
    }

    public function __toString()
    {
        return $this->nombreMvz.' '.$this->getAppatMvz();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $citas;


    /**
     * Add cita
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\citas $cita
     *
     * @return mvz
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ventas;


    /**
     * Add venta
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\ventas $venta
     *
     * @return mvz
     */
    public function addVenta(\veterinaria\Bundle\veterinariaBundle\Entity\ventas $venta)
    {
        $this->ventas[] = $venta;

        return $this;
    }

    /**
     * Remove venta
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\ventas $venta
     */
    public function removeVenta(\veterinaria\Bundle\veterinariaBundle\Entity\ventas $venta)
    {
        $this->ventas->removeElement($venta);
    }

    /**
     * Get ventas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVentas()
    {
        return $this->ventas;
    }
}
