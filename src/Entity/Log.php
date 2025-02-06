<?php

namespace App\Entity;

use App\Repository\LogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogRepository::class)
 */
class Log
{
    const ACTIONS = [
        'create' => [
            'label' => 'Créé(e)',
            'badge' => 'badge bg-success'
        ],
        'enable' => [
            'label' => 'Activé(e)',
            'badge' => 'badge bg-success'
        ],
        'update' => [
            'label' => 'Modifié(e)',
            'badge' => 'badge bg-info'
        ],
        'delete' => [
            'label' => 'Supprimé(e)',
            'badge' => 'badge bg-danger'
        ],
        'disable' => [
            'label' => 'Désactivé(e)',
            'badge' => 'badge bg-danger'
        ],
        'cancel' => [
            'label' => 'Annulé(e)',
            'badge' => 'badge bg-warning'
        ],
        'cloturer' => [
            'label' => 'Clôturé(e)',
            'badge' => 'badge bg-info'
        ],
        'resent' => [
            'label' => 'Email rénvoyé',
            'badge' => 'badge bg-info'
        ],
        'logged' => [
            'label' => 'Connecté',
            'badge' => 'badge bg-info'
        ],
        'password' => [
            'label' => 'Mot de passe changé',
            'badge' => 'badge bg-warning'
        ],
        'password_reset' => [
            'label' => 'Réinitialiser le mot de passe',
            'badge' => 'badge bg-info'
        ],
        'sort_order' => [
            'label' => 'Ordre Changé',
            'badge' => 'badge bg-info'
        ],
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
    private $entity_id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $entity_name;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $action_name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getEntityId(): ?int
    {
        return $this->entity_id;
    }

    public function setEntityId(int $entity_id): self
    {
        $this->entity_id = $entity_id;

        return $this;
    }

    public function getEntityName(): ?string
    {
        return $this->entity_name;
    }

    public function setEntityName(string $entity_name): self
    {
        $this->entity_name = $entity_name;

        return $this;
    }

    public function getActionName(): ?string
    {
        return $this->action_name;
    }

    public function setActionName(string $action_name): self
    {
        $this->action_name = $action_name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public static function getActionBadge($name)
    {
        if (isset(self::ACTIONS[$name]['badge'])) {
            return self::ACTIONS[$name]['badge'];
        }
        return 'badge bg-dark';
    }

    public static function getActionLabel($name)
    {
        if (isset(self::ACTIONS[$name]['label'])) {
            return self::ACTIONS[$name]['label'];
        }
        return $name;
    }

}
