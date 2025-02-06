<?php

namespace App\Entity;

use App\Repository\SiteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Societe;

/**
 * @ORM\Entity(repositoryClass=SiteRepository::class)
 * @UniqueEntity(fields={"name", "societe_id"}, errorPath="name", message="Site existe déjà")
 */
class Site
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
    private $societe_id;

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
     * @ORM\ManyToOne(targetEntity=Societe::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $societe;

    public function getSociete(): ?Societe
    {
        return $this->societe;
    }

    public function setSociete(?Societe $societe = null): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function __toString() {
      return $this->getName();
    }

    public function __construct() {
        $this->setStatus('active');
    }
}
