<?php

declare(strict_types=1);

namespace Bot\Intents;

use FondBot\Conversation\Intent;
use FondBot\Conversation\Activator;
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
            'exact:/start',
            'exact:hello',
            'exact:hi',
        ];
    }

    public function run(MessageReceived $message): void
    {
        $this->reply('Hello, '.$this->getUser()->getUsername().'!');
    }
}
