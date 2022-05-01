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
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Deposito", mappedBy="arendatario")
     * @var Deposito[] An ArrayCollection of Deposito objects.
     */	
	private $depositos;
}
