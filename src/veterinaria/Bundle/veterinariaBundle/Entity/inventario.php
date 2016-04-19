<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * inventario
 */
class inventario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantidadExist;


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
     * Set cantidadExist
     *
     * @param integer $cantidadExist
     *
     * @return inventario
     */
    public function setCantidadExist($cantidadExist)
    {
        $this->cantidadExist = $cantidadExist;

        return $this;
    }

    /**
     * Get cantidadExist
     *
     * @return integer
     */
    public function getCantidadExist()
    {
        return $this->cantidadExist;
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
     * @return inventario
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
     * @return inventario
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
}
