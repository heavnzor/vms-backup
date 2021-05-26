<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormTypeInterface;

/**
 * @ORM\Entity(repositoryClass=MedicamentRepository::class)
 */
class Medicament
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $medicament;

    /**
     * @ORM\Column(type="string", length=155)
     */
    private $formePharmaceutique;

    /**
     * @ORM\Column(type="string", length=135)
     */
    private $voiesAdministration;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $amm;

    /**
     * @ORM\Column(type="string", length=65)
     */
    private $titulaires;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $surveillance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix;

    /**
     * @ORM\Column(type="text")
     */
    private $has;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCis(): ?int
    {
        return $this->cis;
    }

    public function setCis(int $cis): self
    {
        $this->cis = $cis;

        return $this;
    }

    public function getMedicament(): ?string
    {
        return $this->medicament;
    }

    public function setMedicament(string $medicament): self
    {
        $this->medicament = $medicament;

        return $this;
    }

    public function getFormePharmaceutique(): ?string
    {
        return $this->formePharmaceutique;
    }

    public function setFormePharmaceutique(string $formePharmaceutique): self
    {
        $this->formePharmaceutique = $formePharmaceutique;

        return $this;
    }

    public function getVoiesAdministration(): ?string
    {
        return $this->voiesAdministration;
    }

    public function setVoiesAdministration(string $voiesAdministration): self
    {
        $this->voiesAdministration = $voiesAdministration;

        return $this;
    }

    public function getAmm(): ?string
    {
        return $this->amm;
    }

    public function setAmm(string $amm): self
    {
        $this->amm = $amm;

        return $this;
    }

    public function getTitulaires(): ?string
    {
        return $this->titulaires;
    }

    public function setTitulaires(string $titulaires): self
    {
        $this->titulaires = $titulaires;

        return $this;
    }

    public function getSurveillance(): ?string
    {
        return $this->surveillance;
    }

    public function setSurveillance(string $surveillance): self
    {
        $this->surveillance = $surveillance;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getHas(): ?string
    {
        return $this->has;
    }

    public function setHas(string $has): self
    {
        $this->has = $has;

        return $this;
    }
    public function __toString(): string
    {
        return $this->medicament;
    }
}
