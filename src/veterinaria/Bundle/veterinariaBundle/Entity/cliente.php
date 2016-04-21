<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * cliente
 */
class cliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreCL;

    /**
     * @var string
     */
    private $appatCL;

    /**
     * @var string
     */
    private $apmatCL;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreCL
     *
     * @param string $nombreCL
     *
     * @return cliente
     */
    public function setNombreCL($nombreCL)
    {
        $this->nombreCL = $nombreCL;

        return $this;
    }

    /**
     * Get nombreCL
     *
     * @return string
     */
    public function getNombreCL()
    {
        return $this->nombreCL;
    }

    /**
     * Set appatCL
     *
     * @param string $appatCL
     *
     * @return cliente
     */
    public function setAppatCL($appatCL)
    {
        $this->appatCL = $appatCL;

        return $this;
    }

    /**
     * Get appatCL
     *
     * @return string
     */
    public function getAppatCL()
    {
        return $this->appatCL;
    }

    /**
     * Set apmatCL
     *
     * @param string $apmatCL
     *
     * @return cliente
     */
    public function setApmatCL($apmatCL)
    {
        $this->apmatCL = $apmatCL;

        return $this;
    }

    /**
     * Get apmatCL
     *
     * @return string
     */
    public function getApmatCL()
    {
        return $this->apmatCL;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return cliente
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
     * @return cliente
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
     * @return cliente
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
     * @return cliente
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
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return cliente
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
     * @return cliente
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
     * @return cliente
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
     * @return cliente
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
        return $this->nombreCL.' '.$this->getAppatCL();
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
     * @return cliente
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
     * @return cliente
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
