<?php

namespace InstructionForm\Entity;

use Doctrine\ORM\Mapping as ORM;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

/**
 * Prodotti
 *
 * @ORM\Table(name="instruction")
 * @ORM\Entity(repositoryClass="InstructionForm\Entity\Repository\InstructionRepository")
 */
class Instruction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text", nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="text", nullable=true)
     */
    private $titolo;


    public function __construct($nome, $descrizione, $titolo) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->titolo = $titolo;
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
     * Set nome
     *
     * @param string $nome
     *
     * @return instruction
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return instruction
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return instruction
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

}
