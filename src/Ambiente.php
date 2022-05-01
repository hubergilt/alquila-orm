<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ambientes")
 */
class Ambiente
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
	private $nombre;

	/**
	 * @ORM\Column(type="string", length="20")
	 * @var string
	 */
	private $piso;


	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2)
	 * @var decimal
	 */
	private $precio;


	/**
	 * @ORM\Column(type="string", length="10")
	 * @var string
	 */
	private $estado;

    /**
     * @ORM\OneToMany(targetEntity="Deposito", mappedBy="arendatario")
     * @var Deposito[] An ArrayCollection of Deposito objects.
     */	
	private $depositos;

    /**
     * @ORM\ManyToOne(targetEntity="Arrendatario", inversedBy="arrendatarios")
     */
    private $arrendatario;

}
