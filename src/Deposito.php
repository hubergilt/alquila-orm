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
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Arrendatario", inversedBy="depositos")
     */
    private $arrendatario;

}
