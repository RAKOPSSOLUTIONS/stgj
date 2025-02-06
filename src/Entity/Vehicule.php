<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 * @UniqueEntity(fields={"immatriculation"}, message="Immatriculation doit être unique")
 * @UniqueEntity(fields={"user"}, errorPath="user_id", message="Ce chauffeur est déjà affecté à un véhicule")
 */
class Vehicule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $label;

    /**
     * @ORM\Column(type="integer")
     */
    private $marque_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $modele_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $type_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $type_moteur_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $groupe_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $immatriculation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $images;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_exp_inscription;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_exp_licence;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" : "1"})
     */
    private $en_service = 1;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $coursier;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_circulation;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $numero_chassis;

    /**
     * @ORM\Column(type="integer")
     */
    private $seats;

    /**
     * @ORM\ManyToOne(targetEntity=Marque::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    /**
     * @ORM\ManyToOne(targetEntity=Modele::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $modele;

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?Modele
    {
        return $this->modele;
    }

    public function setModele(?Modele $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getMarqueId(): ?int
    {
        return $this->marque_id;
    }

    public function setMarqueId(int $marque_id): self
    {
        $this->marque_id = $marque_id;

        return $this;
    }

    public function getModeleId(): ?int
    {
        return $this->modele_id;
    }

    public function setModeleId(int $modele_id): self
    {
        $this->modele_id = $modele_id;

        return $this;
    }

    public function getTypeId(): ?int
    {
        return $this->type_id;
    }

    public function setTypeId(int $type_id): self
    {
        $this->type_id = $type_id;

        return $this;
    }

    public function getTypeMoteurId(): ?int
    {
        return $this->type_moteur_id;
    }

    public function setTypeMoteurId(int $type_moteur_id): self
    {
        $this->type_moteur_id = $type_moteur_id;

        return $this;
    }

    public function getGroupeId(): ?int
    {
        return $this->groupe_id;
    }

    public function setGroupeId(int $groupe_id): self
    {
        $this->groupe_id = $groupe_id;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?string $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getImages(): ?array
    {
        return json_decode($this->images, true) ?: [];
    }

    public function setImages(?array $images): self
    {
        if (!empty($images)) {
            $this->images = json_encode($images, JSON_UNESCAPED_UNICODE);
        }
        return $this;
    }

    public function getDateExpInscription(): ?\DateTimeInterface
    {
        return $this->date_exp_inscription;
    }

    public function setDateExpInscription(?\DateTimeInterface $date_exp_inscription): self
    {
        $this->date_exp_inscription = $date_exp_inscription;

        return $this;
    }

    public function getDateExpLicence(): ?\DateTimeInterface
    {
        return $this->date_exp_licence;
    }

    public function setDateExpLicence(?\DateTimeInterface $date_exp_licence): self
    {
        $this->date_exp_licence = $date_exp_licence;

        return $this;
    }

    public function getEnService(): ?bool
    {
        return $this->en_service;
    }

    public function setEnService(?bool $en_service): self
    {
        $this->en_service = $en_service;

        return $this;
    }

    public function getCoursier(): ?User
    {
        return $this->coursier;
    }

    public function setCoursier(?User $coursier): self
    {
        $this->coursier = $coursier;

        return $this;
    }

    public function getDateCirculation(): ?\DateTimeInterface
    {
        return $this->date_circulation;
    }

    public function setDateCirculation(?\DateTimeInterface $date_circulation): self
    {
        $this->date_circulation = $date_circulation;

        return $this;
    }

    public function getNumeroChassis(): ?string
    {
        return $this->numero_chassis;
    }

    public function setNumeroChassis(?string $numero_chassis): self
    {
        $this->numero_chassis = $numero_chassis;

        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function __toString() {
      return $this->getMarque().' '.$this->getModele().' '.$this->getImmatriculation();
    }
}
