<?php
// php bin/console mail:send limit=20

namespace App\Command;

use App\Entity\MailHistory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MailCommand extends Command
{

  protected $entityManager;
  protected static $defaultName = 'mail:send';

  const MAX_TO_SEND = 20;

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->entityManager = $entityManager;

    parent::__construct();
  }

  protected function configure()
  {
    $this->setDescription('Send pending emails');
    $this->addArgument('limit', InputArgument::OPTIONAL, 'Max to send');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    if ($l = $input->getArgument('limit')) {
      $limit = intval(explode('=', $l)[1]);
    } else {
      $limit = self::MAX_TO_SEND;
    }

    $mailRepo = $this->entityManager->getRepository(MailHistory::class);
    $result = $mailRepo->findBy(['status' => 'pending'], ['id' => 'ASC'], $limit);
    if (empty($result)) {
      $output->write('NOTHING');
      return Command::SUCCESS;
    }

    foreach ($result as $history) {
      $mailRepo->sendEmail($history);
    }

    $output->write('OK');
    return Command::SUCCESS;
  }
}
