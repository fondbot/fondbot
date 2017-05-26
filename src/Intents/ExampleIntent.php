<?php

declare(strict_types=1);

namespace Bot\Intents;

use FondBot\Conversation\Intent;
use FondBot\Drivers\ReceivedMessage;
use FondBot\Conversation\Activators\Activator;

class ExampleIntent extends Intent
{
    /**
     * Intent activators.
     *
     * @return Activator[]
     */
    public function activators(): array
    {
        return [
            $this->exact('/start'),
            $this->exact('hello'),
            $this->exact('hi'),
        ];
    }

    public function run(ReceivedMessage $message): void
    {
        $this->sendMessage('Hello, '.$this->getUser()->getUsername().'!');
    }
}
