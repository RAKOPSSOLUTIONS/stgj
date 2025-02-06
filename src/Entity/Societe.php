<?php

namespace App\Entity;

use App\Repository\SocieteRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Criteria;
use Symfony\Component\Serializer\Annotation\Groups; 
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Annotation\Ignore;
/**
 * @ORM\Entity(repositoryClass=SocieteRepository::class)
 * @UniqueEntity(fields={"name"}, errorPath="name", message="Société existe déjà")
 */
class Societe
{

    const STATUS = [
        'active'   => 'Activé',
        'inactive' => 'Désactivé'
    ];

    const TYPES = [
        'Hebdomadaire'   => 'Hebdomadaire',
        'Journalière' => 'Journalière'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=150)
     * @Assert\Length(
     *      min=2, 
     *      max=250,
     *      minMessage = "Nom doit avoir au minimum {{ limit }} caractères",
     *      maxMessage = "Nom ne peut pas dépasser {{ limit }} caractères"))
     * @Assert\Regex(
     *     pattern="/<[^>]*>/",
     *     match=false,
     *     message="Nom contient des caractères invalides."
     * )
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min=2, 
     *      max=250,
     *      minMessage = "Adresse doit avoir au minimum {{ limit }} caractères",
     *      maxMessage = "Adresse ne peut pas dépasser {{ limit }} caractères"))
     * @Assert\Regex(
     *     pattern="/<[^>]*>/",
     *     match=false,
     *     message="Adresse contient des caractères invalides."
     * )
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $file_name;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     * @Assert\Email( message = "Email invalide." )
     * @Groups("societe")
     * @Groups({"report"})
     */

    private $email;

     /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $typeReservation;

     /**
     * @ORM\Column(type="time", nullable=true)
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $deadline;

     /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $status;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" : "0"})
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $adhesion = 0;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" : "0"})
     * @Groups("societe")
     * @Groups({"report"})
     */
    private $afficher_repere = 0;

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

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->file_name;
    }

    public function setFileName(string $file_name): self
    {
        if (!empty($file_name)) {
            $path = json_decode($file_name, true)['path'];
            $file_name = str_replace('societes/', '', $path);
        }

        $this->file_name = $file_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getStatusLabel()
    {
        return self::STATUS[$this->status];
    }

    public function getImage(): ?string
    {
        return '/uploads/societes/'.$this->file_name;
    }

    public function __toString() {
      return $this->getName();
    }

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="societe")
     * @Groups({"report"})
     * @Ignore()
     */
    private $users;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Regex(
     *     pattern="/<[^>]*>/",
     *     match=false,
     *     message="Localisation contient des caractères invalides."
     * )
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Regex(pattern="/^0[5678]\d{8}$/", message="Téléphone invalide") 
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Regex(
     *     pattern="/<[^>]*>/",
     *     match=false,
     *     message="Site web contient des caractères invalides."
     * )
     * @Assert\Url(
     *  protocols = {"http", "https"},
     *  message = "Cette URL '{{ value }}' est invalide."
     * )
     */
    private $website;

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
            $user->setSociete($this);
        }

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

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

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getTypeReservation(): ?string
    {
        return $this->typeReservation;
    }

    public function setTypeReservation(?string $typeReservation): self
    {
        $this->typeReservation = $typeReservation;

        return $this;
    }

    public function getDeadline(): ?\DateTimeInterface
    {
        return $this->deadline;
    }

    public function setDeadline(\DateTimeInterface $deadline): self
    {
        $this->deadline = $deadline;

        return $this;
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

    public function getAfficherRepere(): ?bool
    {
        return $this->afficher_repere;
    }

    public function setAfficherRepere(?bool $afficher_repere): self
    {
        $this->afficher_repere = $afficher_repere;

        return $this;
    }
}
