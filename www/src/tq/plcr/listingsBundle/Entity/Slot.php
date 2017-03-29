<?php

namespace tq\plcr\listingsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slot
 *
 * @ORM\Table(name="slot")
 * @ORM\Entity(repositoryClass="tq\plcr\listingsBundle\Entity\SlotRepository")
 */
class Slot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer")
     * @ORM\Id
     */
    private $mid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="direccion", type="integer")
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="words", type="integer")
     */
    private $words;

    /**
     * @var string
     *
     * @ORM\Column(name="simbolo", type="string", length=255)
     */
    private $simbolo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500)
     */
    private $descripcion;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Slot
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set mid
     *
     * @param integer $mid
     *
     * @return Slot
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get mid
     *
     * @return integer
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set direccion
     *
     * @param integer $direccion
     *
     * @return Slot
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return integer
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set words
     *
     * @param integer $words
     *
     * @return Slot
     */
    public function setWords($words)
    {
        $this->words = $words;

        return $this;
    }

    /**
     * Get words
     *
     * @return integer
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Set simbolo
     *
     * @param string $simbolo
     *
     * @return Slot
     */
    public function setSimbolo($simbolo)
    {
        $this->simbolo = $simbolo;

        return $this;
    }

    /**
     * Get simbolo
     *
     * @return string
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Slot
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

