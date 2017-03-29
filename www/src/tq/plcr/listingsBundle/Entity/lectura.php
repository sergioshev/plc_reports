<?php

namespace tq\plcr\listingsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * lectura
 * @ORM\Table(name="consulta_lectura_delta2")
 * @ORM\Entity
 */
class lectura
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="mid", type="integer")
     */
    private $mid;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="sid", type="integer")
     */
    private $sid;

    /**
     * @var string
     * @ORM\Column(name="host", type="string")
     */
    private $host;

    /**
     * @var string
     * @ORM\Column(name="simbolo", type="string")
     */
    private $simbolo;

    /**
     * @var customdatetime
     * @ORM\Id
     * @ORM\Column(name="fecha", type="customdatetime")
     */
    private $fecha;

    /**
     * @var integer
     * @ORM\Column(name="valor", type="integer")
     */
    private $valor;

    /**
     * @var string
     * @ORM\Column(name="intervalo", type="string")
     *
     */
    private $intervalo;

    /**
     * @var integer
     * @ORM\Column(name="delta", type="integer")
     *
     */
    private $delta;


    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return lectura
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
     * Set sid
     *
     * @param integer $sid
     *
     * @return lectura
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return integer
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set host
     *
     * @param string $host
     *
     * @return lectura
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set simbolo
     *
     * @param string $simbolo
     *
     * @return lectura
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
     * Set fecha
     *
     * @param customdatetime $fecha
     *
     * @return lectura
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return customdatetime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     *
     * @return lectura
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set intervalo
     *
     * @param string $intervalo
     *
     * @return lectura
     */
    public function setIntervalo($intervalo)
    {
        $this->intervalo = $intervalo;

        return $this;
    }

    /**
     * Get intervalo
     *
     * @return string
     */
    public function getIntervalo()
    {
        return $this->intervalo;
    }

    /**
     * Set delta
     *
     * @param integer $delta
     *
     * @return lectura
     */
    public function setDelta($delta)
    {
        $this->delta = $delta;

        return $this;
    }

    /**
     * Get delta
     *
     * @return integer
     */
    public function getDelta()
    {
        return $this->delta;
    }
}

