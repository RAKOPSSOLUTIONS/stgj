<?php

namespace App\Entity;

use App\Repository\TarifRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=TarifRepository::class)
 */
class Tarif
{

    const REGIONS = [
        'Rabat and nearby regions'           => 'Rabat and nearby regions',
        'Kénitra & distant regions'       => 'Kénitra & distant regions',
        'Casablanca & distant regions' => 'Casablanca & distant regions',
        'Agadir' => 'Agadir',
        'Marrakech' => 'Marrakech',
        'Fès' => 'Fès',
        'Fès Sefrou' => 'Fès Sefrou',
    ];

    const STATUS = [
        'active'   => 'Active',
        'inactive' => 'Inactive'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $places;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tarif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getPlaces(): ?string
    {
        return $this->places;
    }

    public function setPlaces(string $places): self
    {
        $this->places = $places;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }


    public function __toString() {
      return $this->getCategory() . ' ' . $this->getZone();
    }

    public function __construct() {
       
    }

}
