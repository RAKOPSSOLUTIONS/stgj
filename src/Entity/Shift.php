<?php

namespace App\Entity;

use App\Repository\ShiftRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Reservation;

/**
 * @ORM\Entity(repositoryClass=ShiftRepository::class)
 * @UniqueEntity(fields={"name", "site", "direction"}, errorPath="name", message="Shift existe déjà")
 */
class Shift
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
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $site;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $direction;

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

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(string $site): self
    {
        $this->site = $site;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function __toString() {
      return $this->getName();
    }
}
