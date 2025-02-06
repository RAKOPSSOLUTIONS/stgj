<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
{

    const INTERVALLES = [
        'D' => 'Jour(s)',
        'W' => 'Semaine(s)',
        'M' => 'Mois',
        'Y' => 'Année(s)'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min=2, 
     *      max=250,
     *      minMessage = "Service doit avoir au minimum {{ limit }} caractères",
     *      maxMessage = "Service ne peut pas dépasser {{ limit }} caractères"))
     * @Assert\Regex(
     *     pattern="/<[^>]*>/",
     *     match=false,
     *     message="Service contient des caractères invalides."
     * )
     */
    private $intitule;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Regex(pattern="/\d+/", message = "Intervale de temps invalide.")
     */
    private $temps;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $temps_intervalle;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Regex(pattern="/\d+/", message = "Avant l'échéance invalide.")
     */
    private $rappel_avant;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $rappel_intervalle;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Regex(pattern="/\d+/", message = "Kilométrage de service invalide.")
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Regex(pattern="/\d+/", message = "Kilométrage de rappel invalide.")
     */
    private $rappel_kilometrage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getTemps(): ?int
    {
        return $this->temps;
    }

    public function setTemps(?int $temps): self
    {
        $this->temps = $temps;

        return $this;
    }

    public function getTempsIntervalle(): ?string
    {
        return $this->temps_intervalle;
    }

    public function setTempsIntervalle(?string $temps_intervalle): self
    {
        $this->temps_intervalle = $temps_intervalle;

        return $this;
    }

    public function getRappelAvant(): ?int
    {
        return $this->rappel_avant;
    }

    public function setRappelAvant(?int $rappel_avant): self
    {
        $this->rappel_avant = $rappel_avant;

        return $this;
    }

    public function getRappelIntervalle(): ?string
    {
        return $this->rappel_intervalle;
    }

    public function setRappelIntervalle(?string $rappel_intervalle): self
    {
        $this->rappel_intervalle = $rappel_intervalle;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getRappelKilometrage(): ?int
    {
        return $this->rappel_kilometrage;
    }

    public function setRappelKilometrage(?int $rappel_kilometrage): self
    {
        $this->rappel_kilometrage = $rappel_kilometrage;

        return $this;
    }

    public function getIntervalleToString()
    {
        $intervalles = [];
        if (is_numeric($this->getTemps())) {
            $intervalle = lcfirst(self::INTERVALLES[$this->getTempsIntervalle()]);
            $intervalles[] = $this->getTemps() . ' ' . $intervalle;
        }
        if (is_numeric($this->getKilometrage())) {
          $intervalles[] = $this->getKilometrage() . ' km';
        }
        return implode(' ou ', $intervalles);
    }

    public function getRappelToString()
    {
        if ($this->getRappelAvant()) {
            $intervalle = lcfirst(self::INTERVALLES[$this->getRappelIntervalle()]);
            return $this->getRappelAvant() . " {$intervalle} avant l'échéance";
        }
        return "";
    }

}
