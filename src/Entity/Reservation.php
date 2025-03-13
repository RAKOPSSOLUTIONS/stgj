<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{

    const SITES = [
        "Rabat"           => "Rabat",
        "Agadir"       => "Agadir",
        "Marrakech" => "Marrakech",
        "Fes" => 'Fes',
        "Fes Sefrou" => 'Fes Sefrou'
    ];

    const STATUS = [
        'active'   => 'Active',
        'inactive' => 'Inactive',
        'annulée' => 'Annulée'
    ];

    const DIRECTIONS = [
        'Entrée'   => 'Entrée',
        'Sortie' => 'Sortie'
    ];


    const SHIFTS_SORTIE = [
        '16' => '16h00',
        '17' => '17h00',
        '18' => '18h00',
        '19' => '19h00',
        '20' => '20h00',
        '21' => '21h00',
        '22' => '22h00',
    ];
    const SHIFTS_ENTREE = [
        '6' => '06h00',
        '7' => '07h00',
        '8' => '08h00',
        '9' => '09h00',
        '10' => '10h00'
    ];
    
    const SHIFTS_ALL = [
        '6' => '06h00',
        '7'   => '07h00',
        '8' => '08h00',
        '9' => '09h00',
        '10' => '10h00',
        '16'   => '16h00',
         '17'   => '17h00',
        '18' => '18h00',
        '19' => '19h00',
        '20' => '20h00',
        '21' => '21h00',
        '22' => '22h00',
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $site_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $trajet_entree_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $trajet_sortie_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pickup_entree_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pickup_sortie_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $shift_entree;

    /**
     * @ORM\Column(type="integer")
     */
    private $shift_sortie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_entree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_sortie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $repere_entree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $repere_sortie;

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
     * @ORM\Column(type="text")
     */
    private $dates_entree;

    /**
     * @ORM\Column(type="text")
     */
    private $dates_sortie;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $begin_on;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $end_on;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zone;

    /**
     * @ORM\Column(type="datetime")
     */
    private $reservation_date;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $status;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShiftEntree(): ?int
    {
        return $this->shift_entree;
    }

    public function setShiftEntree(int $shift_entree): self
    {
        $this->shift_entree = $shift_entree;

        return $this;
    }

    public function getShiftSortie(): ?int
    {
        return $this->shift_sortie;
    }

    public function setShiftSortie(int $shift_sortie): self
    {
        $this->shift_sortie = $shift_sortie;

        return $this;
    }

    public function getAdresseEntree(): ?string
    {
        return $this->adresse_entree;
    }

    public function setAdresseEntree(string $adresse_entree): self
    {
        $this->adresse_entree = $adresse_entree;

        return $this;
    }

    public function getAdresseSortie(): ?string
    {
        return $this->adresse_sortie;
    }

    public function setAdresseSortie(string $adresse_sortie): self
    {
        $this->adresse_sortie = $adresse_sortie;

        return $this;
    }

    public function getRepereEntree(): ?string
    {
        return $this->repere_entree;
    }

    public function setRepereEntree(string $repere_entree): self
    {
        $this->repere_entree = $repere_entree;

        return $this;
    }

    public function getRepereSortie(): ?string
    {
        return $this->repere_sortie;
    }

    public function setRepereSortie(string $repere_sortie): self
    {
        $this->repere_sortie = $repere_sortie;

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

    public function getDatesEntree(): ?array
    {
        return json_decode($this->dates_entree, true) ?: [];
    }

    public function setDatesEntree(?array $dates_entree): self
    {
        if (!empty($dates_entree)) {
            $this->dates_entree = json_encode($dates_entree, JSON_UNESCAPED_UNICODE);
        }
        return $this;
    }

    public function getDatesSortie(): ?array
    {
        return json_decode($this->dates_sortie, true) ?: [];
    }

    public function setDatesSortie(?array $dates_sortie): self
    {
        if (!empty($dates_sortie)) {
            $this->dates_sortie = json_encode($dates_sortie, JSON_UNESCAPED_UNICODE);
        }
        return $this;
    }

    public function getBeginOn(): ?\DateTimeInterface
    {
        return $this->begin_on;
    }

    public function setBeginOn(?\DateTimeInterface $begin_on): self
    {
        $this->begin_on = $begin_on;

        return $this;
    }

    public function getEndOn(): ?\DateTimeInterface
    {
        return $this->end_on;
    }

    public function setEndOn(?\DateTimeInterface $end_on): self
    {
        $this->end_on = $end_on;

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

    public function getReservationDate(): ?\DateTimeInterface
    {
        return $this->reservation_date;
    }

    public function setReservationDate(\DateTimeInterface $reservation_date): self
    {
        $this->reservation_date = $reservation_date;

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

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
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

    /**
     * @ORM\ManyToOne(targetEntity=Trajet::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $trajet_entree;

    public function getTrajetEntree(): ?Trajet
    {
        return $this->trajet_entree;
    }

    public function setTrajetEntree(?Trajet $trajet_entree): self
    {
        $this->trajet_entree = $trajet_entree;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Trajet::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $trajet_sortie;

    public function getTrajetSortie(): ?Trajet
    {
        return $this->trajet_sortie;
    }

    public function setTrajetSortie(?Trajet $trajet_sortie): self
    {
        $this->trajet_sortie = $trajet_sortie;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Pickup::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $pickup_entree;

    public function getPickupEntree(): ?Pickup
    {
        return $this->pickup_entree;
    }

    public function setPickupEntree(?Pickup $pickup_entree): self
    {
        $this->pickup_entree = $pickup_entree;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Pickup::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $pickup_sortie;

    public function getPickupSortie(): ?Pickup
    {
        return $this->pickup_sortie;
    }

    public function setPickupSortie(?Pickup $pickup_sortie): self
    {
        $this->pickup_sortie = $pickup_sortie;

        return $this;
    }

    public function __toString() {
      return '#'.$this->getId(); //$this->getTrajetEntree() != null ? $this->getTrajetEntree() : '-';
    }

    public function __construct() {
        $this->setBeginOn(new \DateTime());
        $this->setEndOn(new \DateTime());
        $this->setReservationDate(new \DateTime());
    }

    public function editable(){
        $today = new \DateTime("now");
        $max_date = $today->modify('-6 hour');
        $begingOn = $this->getBeginOn();

        return $this->getStatus() == 'active' && $begingOn > $max_date;
    }

     public function ishomePickUp($dir = 'Entrée'){
        if ( $dir == 'Entrée' ){
            return $this->getShiftEntree() < 8 or $this->getShiftEntree() > 20;
        }
        else{
            return $this->getShiftSortie() < 8 or $this->getShiftSortie() > 20;
        }
        
    }

    /**
     * @ORM\OneToMany(targetEntity=ReservationEntries::class, mappedBy="reservation")
     * @ORM\OrderBy({"id" = "DESC"})
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
            $entry->setReservation($this);
        }

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Site::class)
     */
    private $site;

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): self
    {
        $this->site = $site;

        return $this;
    }



}
