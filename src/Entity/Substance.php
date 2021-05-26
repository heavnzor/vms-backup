<?php

namespace App\Entity;

use App\Entity\User;
use Webmozart\Assert\Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SubstanceRepository;
use Symfony\Component\PropertyInfo\Type;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\FormTypeInterface;


/**
 * @ORM\Entity(repositoryClass=SubstanceRepository::class)
 */
class Substance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\Column(type="string", length=130)
     * 
     */
    private $price;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="substances",cascade={"persist"})
     */
    private $users;

    /**
     * @ORM\Column(type="datetime" )
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="boolean", length=255, nullable=true)
     */
    private $nocivity;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $quantityType;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addSubstance($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeSubstance($this);
        }

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

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

    public function getQuantityType(): ?string
    {
        return $this->quantityType;
    }

    public function setQuantityType(?string $quantityType): self
    {
        $this->quantityType = $quantityType;

        return $this;
    }

    /**
     * Get the value of nocivity
     */ 
    public function getNocivity()
    {
        return $this->nocivity;
    }

    /**
     * Set the value of nocivity
     *
     * @return  self
     */ 
    public function setNocivity($nocivity)
    {
        $this->nocivity = $nocivity;

        return $this;
    }
}
