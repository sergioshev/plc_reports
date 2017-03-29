<?php

namespace tq\plcr\listingsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lecturaDelta
 *
 * @ORM\Table(name="consulta_ultima_lectura")
 * @ORM\Entity
 */
class ultimaLectura
{
    /**
     * @ORM\Id
     * @ORM\Column(name="mid", type="integer")
     */
    private $mid;

    /**
     * @ORM\Id
     * @ORM\Column(name="sid", type="integer")
     */
    private $sid;

    /**
     * @ORM\Id
     * @ORM\Column(name="fecha", type="customdatetime")
     **/
    private $fecha;

    /**
     * @ORM\Column(name="valor", type="integer")
     */
    private $valor;

    /**
     * @ORM\Column(name="intervalo", type="string")
     */
    private $intervalo;

    /**
     * @ORM\Column(name="host", type="string")
     */
    private $host;

    /**
     * @ORM\Column(name="simbolo", type="string")
     */
    private $simbolo;

    public function getMid()
    {
      return $this->mid;
    }

    public function getSid()
    {
      return $this->sid;
    }

    public function getValor()
    {
      return $this->valor;
    }
  
    public function getFecha()
    {
      return $this->fecha;
    }

    public function getIntervalo()
    {
      return $this->intervalo;
    }

    public function getHost()
    {
      return $this->host;
    }

    public function getSimbolo()
    {
      return $this->simbolo;
    }
}

