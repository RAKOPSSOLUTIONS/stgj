<?php

namespace App\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

class MatriculeNotFoundException extends AuthenticationException
{
    private string $matricule;

    public function __construct(string $message = 'Email ou matricule non trouvé', string $matricule = '', int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->matricule = $matricule;
    }

    public function getMatricule(): string
    {
        return $this->matricule;
    }

    public function getMessageKey(): string
    {
        return 'Email ou matricule "{{ matricule }}" could not be found.';
    }

    public function getMessageData(): array
    {
        return ['{{ matricule }}' => $this->matricule];
    }
}
