<?php

namespace App\Entity;

use App\Repository\PickupRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Reservation;

/**
 * @ORM\Entity(repositoryClass=PickupRepository::class)
 * @UniqueEntity(fields={"name", "trajet", "direction"}, errorPath="name", message="Point de ramassage existe déjà")
 */
class Pickup
{
    const STATUS = [
        'active'   => 'Active',
        'inactive' => 'Inactive'
    ];

    const DIRECTIONS = [
        'Entrée'   => 'Entrée',
        'Sortie' => 'Sortie'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $name;

     /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $trajet_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $direction;

    /**
     * @ORM\Column(type="time")
     */
    private $heure;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     */
    private $latitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $status;


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

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
       return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
       $this->heure = $heure;

       return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Trajet::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $trajet;

    public function getTrajet(): ?Trajet
    {
        return $this->trajet;
    }

    public function setTrajet(?Trajet $trajet = null): self
    {
        $this->trajet = $trajet;

        return $this;
    }

    public function __toString() {
      return $this->getName();
    }

    public function __construct() {
        $this->setStatus('active');
        $this->setDirection('Entrée');
    }
}
