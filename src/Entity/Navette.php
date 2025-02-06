<?php

namespace App\Entity;

use App\Repository\NavetteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Entity\Trajet;
use App\Entity\ReservationEntries;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=NavetteRepository::class)
 */
class Navette
{
    const STATUS = [
        'en attente'   => 'En attente',
        'annulee' => 'Annulée',
        'commandée' => 'Commandée',
        'validée' => 'Validée',
        'commencée' => 'Commencée',
        'terminée' => 'Terminée',
        'pré commande' => 'Pré commande'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $vehicule_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $trajet_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $societe_id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $tarif;

     /**
     * @ORM\Column(type="datetime")
     */

    private $date_navette;

     /**
     * @ORM\Column(type="datetime")
     */
    private $start_at;

     /**
     * @ORM\Column(type="datetime")
     */
    private $end_at;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $direction;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $zone;

    /**
     * @ORM\Column(type="integer")
     */
    private $heure_navette;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree;

    /**
     * @ORM\Column(type="integer")
     */
    private $distance;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree_up;

    /**
     * @ORM\Column(type="integer")
     */
    private $distance_up;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     */
    private $pickupLatitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     */
    private $pickupLongitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     */
    private $dropoffLatitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     */
    private $dropoffLongitude;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pickupLocation;

     /**
     * @ORM\Column(type="string", length=50)
     */
    private $dropoffLocation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_trajet;


    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Vehicule::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicule;

    /**
     * @ORM\ManyToOne(targetEntity=Trajet::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $trajet;

    /**
     * @ORM\ManyToOne(targetEntity=Societe::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $societe;




    public function getId(): ?int
    {
        return $this->id;
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

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(string $direction): self
    {
        $this->direction = $direction;

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


    public function getHeureNavette(): ?int
    {
        return $this->heure_navette;
    }

    public function setHeureNavette(int $heure_navette): self
    {
        $this->heure_navette = $heure_navette;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getVehicule(): ?Vehicule
    {
        return $this->vehicule;
    }

    public function setVehicule(?Vehicule $vehicule): self
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getNomTrajet(): ?string
    {
        return $this->nom_trajet;
    }

    public function setNomTrajet(string $nom_trajet): self
    {
        $this->nom_trajet = $nom_trajet;

        return $this;
    }

    public function getTrajet(): ?Trajet
    {
        return $this->trajet;
    }

    public function setTrajet(?Trajet $trajet): self
    {
        $this->trajet = $trajet;

        return $this;
    }

    public function getSociete(): ?Societe
    {
        return $this->societe;
    }

    public function setSociete(?Societe $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity=ReservationEntries::class, mappedBy="navette")
     * @ORM\OrderBy({"checkin_at" = "ASC"})
     */
    private $entries;

    /**
     * @return Collection|ReservationEntries[]
     */
    public function getEntries(): Collection
    {
        return $this->entries;
    }

    public function addEntry(ReservationEntries $entry): self
    {
        if (!$this->entries->contains($entry)) {
            $this->entries[] = $entry;
            $entry->setNavette($this);
        }

        return $this;
    }

    public function getDateNavette(): ?\DateTimeInterface
    {
        return $this->date_navette;
    }

    public function setDateNavette(\DateTimeInterface $date_navette): self
    {
        $this->date_navette = $date_navette;

        return $this;
    }

    public function getStartAt(): ?\DateTimeInterface
    {
        return $this->start_at;
    }

    public function setStartAt(\DateTimeInterface $start_at): self
    {
        $this->start_at = $start_at;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->end_at;
    }

    public function setEndtAt(\DateTimeInterface $end_at): self
    {
        $this->end_at = $end_at;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(?string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getDureeUp(): ?string
    {
        return $this->duree_up;
    }

    public function setDureeUp(?string $duree_up): self
    {
        $this->duree_up = $duree_up;

        return $this;
    }

    public function getDistanceUp(): ?float
    {
        return $this->distance_up;
    }

    public function setDistanceUp(?float $distance_up): self
    {
        $this->distance_up = $distance_up;

        return $this;
    }

    public function getPickupLatitude(): ?float
    {
        return $this->pickupLatitude;
    }

    public function setPickupLatitude(?float $pickupLatitude): self
    {
        $this->pickupLatitude = $pickupLatitude;

        return $this;
    }

    public function getPickupLongitude(): ?float
    {
        return $this->pickupLongitude;
    }

    public function setPickupLongitude(?float $pickupLongitude): self
    {
        $this->pickupLongitude = $pickupLongitude;

        return $this;
    }

    public function getDropoffLatitude(): ?float
    {
        return $this->dropoffLatitude;
    }

    public function setDropoffLatitude(?float $dropoffLatitude): self
    {
        $this->dropoffLatitude = $dropoffLatitude;

        return $this;
    }

    public function getDropoffLongitude(): ?float
    {
        return $this->dropoffLongitude;
    }

    public function setDropoffLongitude(?float $dropoffLongitude): self
    {
        $this->dropoffLongitude = $dropoffLongitude;

        return $this;
    }

    public function getPickupLocation(): ?string
    {
        return $this->pickupLocation;
    }

    public function setPickupLocation(?string $pickupLocation): self
    {
        $this->pickupLocation = $pickupLocation;

        return $this;
    }

    public function getDropoffLocation(): ?string
    {
        return $this->dropoffLocation;
    }

    public function setDropoffLocation(?string $dropoffLocation): self
    {
        $this->dropoffLocation = $dropoffLocation;

        return $this;
    }

    public function getCap(){
        return '';
    }

    public function getTaux(){
        return '';
    }


    public function __construct() {
        $this->setDateNavette(new \DateTime());
        $this->setStatus('en attente');
    }

    public function getOrderedSeats(){
        if ( !$this->getVehicule() ) return 0;
        $seats = $this->getVehicule()->getSeats();
        if ( $seats <= 7 ){
            return 7;
        }
        else if ( $seats > 7 && $seats <= 14  ){
            return 14;
        }
        else if ( $seats > 14 && $seats <= 20  ){
            return 20; 
        }
        else if ( $seats > 20 && $seats <= 30 ){
            return 24;
        }
        else if ( $seats > 24 && $seats <= 26 ){
            return 27;
        }
        else{
            return $seats;
        }

    }

    public function __toString() {
      return ''.$this->getId().'';
    }


}
