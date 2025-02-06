<?php

namespace App\Entity;

use App\Helpers\Base;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MailHistoryRepository")
 */
class MailHistory
{

    const STATUS = [
        'pending' => ['label' => 'En attente', 'icon' => 'hourglass-end', 'color' => '#ffc107'],
        'sent'    => ['label' => 'Envoyé', 'icon' => 'check-circle', 'color' => '#8bc34a'],
        'failed'  => ['label' => 'Échoué', 'icon' => 'times-circle', 'color' => '#f44336']
    ];

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $template;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sender;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reply_to;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $receiver;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $cc;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $subject;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $variables;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $attachments;

    /**
     * @ORM\Column(type="string", length=16, options={"default" : "pending"})
     */
    private $status = 'pending';

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $resend_count = 0;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sent_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $created_by;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(?string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReplyTo(): ?string
    {
        return $this->reply_to;
    }

    public function setReplyTo(?string $reply_to): self
    {
        $this->reply_to = $reply_to;

        return $this;
    }

    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    public function setReceiver(?string $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getCc(): ?array
    {
        return array_filter(explode(',', $this->cc), function ($email) {
            return !empty($email) && Base::isValidEmail($email);
        });
    }

    public function setCc(array $cc = []): self
    {
        if (!empty($cc)) {
            $this->cc = implode(',', $cc);
        }

        return $this;
    }

    public function getSubject(): ?string
    {
        return Base::replaceVars($this->subject, $this->getVariables());
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

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

    public function getVariables(): ?array
    {
        return json_decode($this->variables, true) ?: [];
    }

    public function setVariables(?array $variables): self
    {
        if (!empty($variables)) {
            $this->variables = json_encode($variables, JSON_UNESCAPED_UNICODE);
        }

        return $this;
    }

    public function getAttachments(): ?array
    {
        return json_decode($this->attachments, true) ?: [];
    }

    public function setAttachments(?array $attachments): self
    {
        if (!empty($attachments)) {
            $this->attachments = json_encode($attachments, JSON_UNESCAPED_UNICODE);
        }

        return $this;
    }

    public function getResendCount(): ?int
    {
        return $this->resend_count;
    }

    public function setResendCount(?int $resend_count): self
    {
        $this->resend_count = $resend_count;

        return $this;
    }

    public function getSentAt(): ?\DateTimeInterface
    {
        return $this->sent_at;
    }

    public function setSentAt(?\DateTimeInterface $sent_at): self
    {
        $this->sent_at = $sent_at;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getCreatedBy(): ?int
    {
        if (!$this->created_by && $this->campaign) {
            return $this->campaign->getCreatedBy();
        }
        return $this->created_by;
    }

    public function setCreatedBy(?int $created_by): self
    {
        $this->created_by = $created_by;

        return $this;
    }
}
