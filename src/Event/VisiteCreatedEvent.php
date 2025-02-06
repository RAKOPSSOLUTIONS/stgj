<?php

namespace App\Event;

use App\Entity\Visite;
use Symfony\Contracts\EventDispatcher\Event;

class VisiteCreatedEvent extends Event
{
    protected $visite;

    public function __construct(Visite $visite)
    {
        $this->visite = $visite;
    }

    public function getVisite(): Visite
    {
        return $this->visite;
    }
}
