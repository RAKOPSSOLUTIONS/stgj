<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SettingRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=SettingRepository::class)
 */
class Setting
{
    const FIELD_TYPES = [
        "text"           => "Texte",
        "textarea"       => "Texte long",
        "number"         => "Nombre",
        "choice"         => "Liste déroulante",
        "checkbox"       => "Case à cocher",
        "radio"          => "Boutons radio",
        "datetime-local" => "Date et l'heure",
        "email"          => "E-mail",
        "password"       => "Mot de passe",
        "json"           => "Objet JSON"
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, unique=true)
     * @Assert\Regex(pattern= "/^[a-z\-_.]+$/i", message= "Caractères autorisés: a-z - _ .")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="string", length=16, options={"default" : "text"})
     */
    private $field_type = 'text';

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $value;

    /**
     * @ORM\Column(type="boolean", options={"default" : 1})
     */
    private $editable = true;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getValue($parse = false)
    {
        if ($parse && in_array($this->field_type, ['choice', 'checkbox', 'radio'])) {
            $items = [];
            foreach (explode("\n", $this->value) as $value) {
                $parts = explode('=>', $value);
                $item_key = trim($parts[0]);
                $item_value = trim($parts[1]);
                $items[$item_key] = $item_value;
            }
            return $items;
        }
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getFieldType(): ?string
    {
        return $this->field_type;
    }

    public function setFieldType(?string $field_type): self
    {
        $this->field_type = $field_type;

        return $this;
    }

    public function getTypeLabel()
    {
        return self::FIELD_TYPES[$this->field_type];
    }

    public function getEditable(): ?int
    {
        return $this->editable;
    }

    public function setEditable(int $editable): self
    {
        $this->editable = $editable;

        return $this;
    }

}
