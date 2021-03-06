<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="arrendatarios")
 */
class Arrendatario
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 * @var int
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length="45")
	 * @var string
	 */
	private $nombres;

	/**
	 * @ORM\Column(type="string", length="45")
	 * @var string
	 */
	private $paterno;


	/**
	 * @ORM\Column(type="string", length="45")
	 * @var string
	 */
	private $materno;

	/**
	 * @ORM\Column(type="string", length="8")
	 * @var string
	 */
	private $dni;

    /**
     * @ORM\OneToMany(targetEntity="Deposito", mappedBy="arendatario")
     * @var Deposito[] An ArrayCollection of Deposito objects.
     */	
	private $depositos;

    /**
     * @ORM\OneToMany(targetEntity="Ambiente", mappedBy="arendatario")
     * @var Ambiente[] An ArrayCollection of Ambiente objects.
     */	
	private $ambientes;

}
