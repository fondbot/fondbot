<?php

declare(strict_types=1);

namespace Bot\Intents;

use FondBot\Conversation\Activator;
use FondBot\Conversation\Intent;
use FondBot\Events\MessageReceived;

class ExampleIntent extends Intent
{
    /**
     * Intent activators.
     *
     * @return \FondBot\Contracts\Conversation\Activator[]
     */
    public function activators(): array
    {
        return [
            Activator::exact('/start'),
            Activator::exact('hello'),
            Activator::exact('hi'),
        ];
    }

    public function run(MessageReceived $message): void
    {
        $this->reply('Hello, '.$this->getUser()->getUsername().'!');
    }
}
