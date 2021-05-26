<?php

namespace App\Entity;

use App\Repository\CannabisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CannabisRepository::class)
 */
class Cannabis
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $variete;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $effets;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $saveur;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVariete(): ?string
    {
        return $this->variete;
    }

    public function setVariete(string $variete): self
    {
        $this->variete = $variete;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEffets(): ?string
    {
        return $this->effets;
    }

    public function setEffets(string $effets): self
    {
        $this->effets = $effets;

        return $this;
    }

    public function getSaveur(): ?string
    {
        return $this->saveur;
    }

    public function setSaveur(string $saveur): self
    {
        $this->saveur = $saveur;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
