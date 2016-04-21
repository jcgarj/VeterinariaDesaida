<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * proveedores
 */
class proveedores
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $regimenT;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $telefono;


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
     * Set regimenT
     *
     * @param string $regimenT
     *
     * @return proveedores
     */
    public function setRegimenT($regimenT)
    {
        $this->regimenT = $regimenT;

        return $this;
    }

    /**
     * Get regimenT
     *
     * @return string
     */
    public function getRegimenT()
    {
        return $this->regimenT;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     *
     * @return proveedores
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return proveedores
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

    public function __toString()
    {
        return $this->regimenT;
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
     * @return proveedores
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
     * @return proveedores
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
