<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="depositos")
 */
class Deposito
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 * @var int
	 */
	private $id;

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2)
	 * @var decimal
	 */
	private $monto;

	/**
	 * @ORM\Column(type="string", length="4")
	 * @var string
	 */
	private $anio;

	/**
	 * @ORM\Column(type="string", length="3")
	 * @var string
	 */
	private $mes;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    private $fechaDeposito;

	/**
	 * @ORM\Column(type="string", length="100")
	 * @var string
	 */
	private $observacion;

    /**
     * @ORM\ManyToOne(targetEntity="Arrendatario", inversedBy="depositos")
     */
    private $arrendatario;

    /**
     * @ORM\ManyToOne(targetEntity="Ambiente", inversedBy="depositos")
     */
    private $ambiente;

}
