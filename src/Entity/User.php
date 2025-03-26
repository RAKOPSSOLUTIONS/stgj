<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Reservation;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Annotation\Groups; 

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{

    const ROLES = [
        'admin' => 'Administrateur',
        'user' => 'Utilisateur',
        'chauffeur' => 'Chauffeur',
        'manager' => 'Manager', 
    ];

    const STATUS = [
        'active'   => 'Active',
        'inactive' => 'Inactive'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"report"})
     */
    private $id;

     /**
     * @ORM\Column(type="integer")
     * @Groups({"report"})
     */
    private $societe_id;

     /**
     * @ORM\Column(type="integer")
     * @Groups({"report"})
     */
    private $site_id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Regex(
     *     pattern="/^[A-Za-z0-9 ]+$/",
     *     message="Le matricule ne doit contenir que des lettres, des chiffres et des espaces."
     * )
     * @Groups({"report"})
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\Regex(
     *     pattern="/^[A-Za-z0-9 ]+$/",
     *     message="Le projet ne doit contenir que des lettres, des chiffres et des espaces."
     * )
     * @Groups({"report"})
     */
    private $projet;

    /**
     * @ORM\Column(type="string", length=150)
     * @Groups({"report"})
     */
    private $zone;

    /**
     * @ORM\Column(type="string", length=150)
     * @Groups({"report"})
     */
    private $uid;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"report"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"report"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     * @Assert\Email( message = "Email invalide." )
     * @Groups({"report"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Regex(pattern="/^0[5678]\d{8}$/", message="Téléphone invalide") 
     * @Groups({"report"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"report"})
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"report"})
     */
    private $password_reset_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"report"})
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"report"})
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"report"})
     */
    private $locale;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"report"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"report"})
     */
    private $company;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" : "0"})
     * @Groups({"report"})
     */
    private $adhesion = 0;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"report"})
     */
    private $date_adhesion;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     * @Groups({"report"})
     */
    private $latitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=6)
     * @Groups({"report"})
     */
    private $longitude;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"report"})
     */
    private $updates_count;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getProjet(): ?string
    {
        return $this->projet;
    }

    public function setProjet(string $projet): self
    {
        $this->projet = $projet;

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

    public function getSocieteId(): ?string
    {
        return $this->societe_id;
    }

    public function setSocieteId(string $zone): self
    {
        $this->societe_id = $societe_id;

        return $this;
    }

    public function getSiteId(): ?string
    {
        return $this->site_id;
    }

    public function setSiteId(string $zone): self
    {
        $this->site_id = $site_id;

        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getFullName(): ?string
    {
        return trim($this->prenom . ' ' . $this->nom);
    }

    public function getShortName(): ?string
    {
        return substr($this->prenom, 0, 1) . substr($this->nom, 0, 1);
    }

    public function getUsername(): ?string
    {
        return $this->email;
    }

    public function getUserIdentifier(): ?string
    {
        return $this->email;
    }

    public function getEmail(): ?string
    {
        return strpos($this->email, '@email.ma') ? '' : $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPasswordResetToken(): ?string
    {
        return $this->password_reset_token;
    }

    public function setPasswordResetToken(?string $password_reset_token): self
    {
        $this->password_reset_token = $password_reset_token;

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

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

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

    public function getStatusLabel()
    {
        return self::STATUS[$this->status];
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUpdatesCount(): ?int
    {
        return $this->updates_count;
    }

    public function setUpdatesCount(int $updates_count): self
    {
        $this->updates_count = $updates_count;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = json_decode($this->roles, true) ?: [];
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = json_encode($roles);

        return $this;
    }

    public function getRoleName()
    {
        $roles = $this->getRoles();
        $role_name = \strtolower($roles[0]);
        return \str_replace('role_', '', $role_name);
    }

    public function getRoleLabel($app_name = 'visiteurs')
    {
        $role_name = $this->getRoleName();
        return isset($roles[$role_name]) ? $roles[$role_name] : $role_name;
    }

    public static function getRoleMeta($role_name, $meta = 'singular')
    {
        return isset(self::ROLES_META[$role_name][$meta]) ? self::ROLES_META[$role_name][$meta] : $role_name;
    }

    public function hasRole($name)
    {
        return $this->getRoleName() == $name;
    }

    public function hasRoles($roles)
    {
        return in_array($this->getRoleName(), $roles);
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="user")
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    /**
     * @return Collection|reservations[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setUser($this);
        }

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Societe::class)
     * @Groups({"report"})
     * @MaxDepth(1)
     */
    private $societe;

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
     * @ORM\ManyToOne(targetEntity=Site::class ,cascade={"persist"})
     * @Groups({"report"})
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

    public function removeReservation(Reservation $reservation): self
    {
        if ( $this->reservations->removeElement($reservation) ) {
            // set the owning side to null (unless already changed)
            if ($reservation->getUser() === $this) {
                $reservation->setUser(null); 
            }
        }

        return $this;
    }

    public function isAdmin()
    {
        return $this->getRoleName() == 'admin';
    }

    public function getAdhesion(): ?bool
    {
        return $this->adhesion;
    }

    public function setAdhesion(?bool $adhesion): self
    {
        $this->adhesion = $adhesion;

        return $this;
    }

    public function getDateAdhesion(): ?\DateTimeInterface
    {
        return $this->date_adhesion;
    }

    public function setDateAdhesion(?\DateTimeInterface $date_adhesion): self
    {
        $this->date_adhesion = $date_adhesion;

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

}
