<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * ventas
 */
class ventas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaSalida;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $total;


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
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     *
     * @return ventas
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return ventas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return ventas
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $medicamentos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productos;

    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\cliente
     */
    private $cliente;

    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\mvz
     */
    private $mvz;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medicamentos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add medicamento
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\medicamentos $medicamento
     *
     * @return ventas
     */
    public function addMedicamento(\veterinaria\Bundle\veterinariaBundle\Entity\medicamentos $medicamento)
    {
        $this->medicamentos[] = $medicamento;

        return $this;
    }

    /**
     * Remove medicamento
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\medicamentos $medicamento
     */
    public function removeMedicamento(\veterinaria\Bundle\veterinariaBundle\Entity\medicamentos $medicamento)
    {
        $this->medicamentos->removeElement($medicamento);
    }

    /**
     * Get medicamentos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedicamentos()
    {
        return $this->medicamentos;
    }

    /**
     * Add producto
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\productos $producto
     *
     * @return ventas
     */
    public function addProducto(\veterinaria\Bundle\veterinariaBundle\Entity\productos $producto)
    {
        $this->productos[] = $producto;

        return $this;
    }

    /**
     * Remove producto
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\productos $producto
     */
    public function removeProducto(\veterinaria\Bundle\veterinariaBundle\Entity\productos $producto)
    {
        $this->productos->removeElement($producto);
    }

    /**
     * Get productos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductos()
    {
        return $this->productos;
    }

    /**
     * Set cliente
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\cliente $cliente
     *
     * @return ventas
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
     * Set mvz
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\mvz $mvz
     *
     * @return ventas
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
