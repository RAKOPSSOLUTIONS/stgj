<?php

namespace App\Entity;

use App\Repository\ReservationEntriesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=ReservationEntriesRepository::class)
 */
class ReservationEntries
{

    const STATUS = [
        'en attente'   => 'en attente',
        'validée'   => 'validée',
        'annulée' => 'Annulée',
        'Checked' => 'Checked',
        'absent' => 'absent',
        'Wrong shift' => 'Wrong shift'
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
    private $reservation_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $reservation_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $reservation_heure;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $direction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zone;

    /**
     * @ORM\Column(type="datetime")
     */
    private $checkin_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $checkout_at;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $status;

     /**
     * @ORM\Column(type="string", length=50)
     */
    private $pickupLocation;

     /**
     * @ORM\Column(type="string", length=50)
     */
    private $dropoffLocation;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree_up;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $distance;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_passage;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $trajet_id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $pickup_id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $navette_id;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReservationId(): ?int
    {
        return $this->reservation_id;
    }

    public function setReservationId(int $reservation_id): self
    {
        $this->reservation_id = $reservation_id;

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

    public function getReservationHeure(): ?int
    {
        return $this->reservation_heure;
    }

    public function setReservationHeure(int $reservation_heure): self
    {
        $this->reservation_heure = $reservation_heure;

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): self
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

    public function getCheckinAt(): ?\DateTimeInterface
    {
        return $this->checkin_at;
    }

    public function setCheckinAt(\DateTimeInterface $checkin_at): self
    {
        $this->checkin_at = $checkin_at;

        return $this;
    }

    public function getCheckoutAt(): ?\DateTimeInterface
    {
        return $this->checkout_at;
    }

    public function setCheckoutAt(\DateTimeInterface $checkout_at): self
    {
        $this->checkout_at = $checkout_at;

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

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(?string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDureeUp(): ?string
    {
        return $this->duree_up;
    }

    public function setDureeUP(?string $duree_up): self
    {
        $this->duree_up = $duree_up;

        return $this;
    }

    public function getHeurePassage(): ?\DateTimeInterface
    {
       return $this->heure_passage;
    }

    public function setHeurePassage(\DateTimeInterface $heure_passage): self
    {
       $this->heure_passage = $heure_passage;

       return $this;
    }


    /**
     * @ORM\ManyToOne(targetEntity=Reservation::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservation;

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;

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

    public function setTrajet(?Trajet $trajet): self
    {
        $this->trajet = $trajet;

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

    /**
     * @ORM\ManyToOne(targetEntity=Pickup::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $pickup;

    public function getPickup(): ?Pickup
    {
        return $this->pickup;
    }

    public function setPickup(?Pickup $pickup): self
    {
        $this->pickup = $pickup;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Navette::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $navette;

    public function getNavette(): ?Navette
    {
        return $this->navette;
    }

    public function setNavette(?Navette $navette): self
    {
        $this->navette = $navette;

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

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function editable(){

        return true ;

        $today = new \DateTime("now");
        $max_date = $today->modify('-6 hour');
        $begingOn = $this->getReservationDate();

        return $begingOn > $max_date;
    }     

    public function canValidate($user)
    {
        if ( $user->isAdmin() ) return true;
        if ( $this->getUser()->getId() != $user->getId() or !in_array($this->getStatus(), ['en attente', 'validée']) ) return false ;

        $date = $this->getReservationDate();
        $dayOfWeek = $date->format('l');
        $echeance = new \DateTime("now");
        $now = new \DateTime("now");

        if ( $now > $date  ) return false ;

        $days = ['Sunday', 'Saturday', 'Monday'];

        $direction = $this->getDirection();
        $is_shifts_entree = array_key_exists($this->getReservationHeure(), Reservation::SHIFTS_ENTREE) ? true : false;
        $is_shifts_sortie = array_key_exists($this->getReservationHeure(), Reservation::SHIFTS_SORTIE) ? true : false;

        //entre + shift entree 
        //sortie + shifre sortie
        if ( ($direction == 'Entrée' && $is_shifts_entree) OR ($direction == 'Sortie' && $is_shifts_sortie) ){

            if ( $dayOfWeek == 'Monday' ){
              $date_echeance = $date->modify('-3 day');
            }
            else if ( $dayOfWeek == 'Saturday' ){
              $date_echeance = $date->modify('-1 day');
            }
            else if ( $dayOfWeek == 'Sunday' ){
              $date_echeance = $date->modify('-2 day');
            }
            else{
              $date_echeance = $date->modify('-1 day');
            }

          $date_echeance = $date_echeance->format('Y-m-d');
          $date_echeance = new \DateTime($date_echeance.'13:00:00');

        }
        else{

            if ( $dayOfWeek == 'Monday' ){
              $date_echeance = $date->modify('-3 day');
              if ( $direction == 'Entrée' && $this->getReservationHeure() == 22 ) $date_echeance = $date->modify('-1 day');
            }
            else if ( $dayOfWeek == 'Saturday' ){
              $date_echeance = $date->modify('-1 day');
            }
            else if ( $dayOfWeek == 'Sunday' ){
              $date_echeance = $date->modify('-2 day');
            }
            else{
              $date_echeance = $date->modify('-2 day');
            }

            $date_echeance = $date_echeance->format('Y-m-d');
            $date_echeance = new \DateTime($date_echeance.'23:59:00');

        }

        return $now > $echeance;

    }

    public function isHomePickup(){
        return $this->getReservationHeure() < 8 or $this->getReservationHeure() > 22;
    }

    public function calculateDistance()
    {
        // Haversine formula implementation
        $earthRadius = 6371; // km
        $latFrom = deg2rad($this->getPickupLatitude());
        $lonFrom = deg2rad($this->getPickupLongitude());
        $latTo = deg2rad($this->getDropoffLatitude());
        $lonTo = deg2rad($this->getDropoffLongitude());

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(
            sqrt(
                pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)
            )
        );

        return $angle * $earthRadius;
    }
}
