<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * medicamentos
 */
class medicamentos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreMed;

    /**
     * @var \DateTime
     */
    private $fechaCad;

    /**
     * @var string
     */
    private $tipoMed;

    /**
     * @var integer
     */
    private $costo;

    /**
     * @var integer
     */
    private $precio;


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
     * Set nombreMed
     *
     * @param string $nombreMed
     *
     * @return medicamentos
     */
    public function setNombreMed($nombreMed)
    {
        $this->nombreMed = $nombreMed;

        return $this;
    }

    /**
     * Get nombreMed
     *
     * @return string
     */
    public function getNombreMed()
    {
        return $this->nombreMed;
    }

    /**
     * Set fechaCad
     *
     * @param \DateTime $fechaCad
     *
     * @return medicamentos
     */
    public function setFechaCad($fechaCad)
    {
        $this->fechaCad = $fechaCad;

        return $this;
    }

    /**
     * Get fechaCad
     *
     * @return \DateTime
     */
    public function getFechaCad()
    {
        return $this->fechaCad;
    }

    /**
     * Set tipoMed
     *
     * @param string $tipoMed
     *
     * @return medicamentos
     */
    public function setTipoMed($tipoMed)
    {
        $this->tipoMed = $tipoMed;

        return $this;
    }

    /**
     * Get tipoMed
     *
     * @return string
     */
    public function getTipoMed()
    {
        return $this->tipoMed;
    }

    /**
     * Set costo
     *
     * @param integer $costo
     *
     * @return medicamentos
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
     * Set precio
     *
     * @param integer $precio
     *
     * @return medicamentos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    public function __toString()
    {
        return $this->nombreMed.' '.$this->tipoMed;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\proveedores
     */
    private $proveedores;


    /**
     * Set proveedores
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\proveedores $proveedores
     *
     * @return medicamentos
     */
    public function setProveedores(\veterinaria\Bundle\veterinariaBundle\Entity\proveedores $proveedores = null)
    {
        $this->proveedores = $proveedores;

        return $this;
    }

    /**
     * Get proveedores
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\proveedores
     */
    public function getProveedores()
    {
        return $this->proveedores;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\inventario
     */
    private $inventario;


    /**
     * Set inventario
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\inventario $inventario
     *
     * @return medicamentos
     */
    public function setInventario(\veterinaria\Bundle\veterinariaBundle\Entity\inventario $inventario = null)
    {
        $this->inventario = $inventario;

        return $this;
    }

    /**
     * Get inventario
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\inventario
     */
    public function getInventario()
    {
        return $this->inventario;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\ventas
     */
    private $ventas;


    /**
     * Set ventas
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\ventas $ventas
     *
     * @return medicamentos
     */
    public function setVentas(\veterinaria\Bundle\veterinariaBundle\Entity\ventas $ventas = null)
    {
        $this->ventas = $ventas;

        return $this;
    }

    /**
     * Get ventas
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\ventas
     */
    public function getVentas()
    {
        return $this->ventas;
    }
}
