<?php

declare(strict_types=1);

namespace Bot\Intents;

use FondBot\Conversation\Activators\Exact;
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
            Exact::make('/start'),
            Exact::make('hello'),
            Exact::make('hi'),
        ];
    }

    public function run(MessageReceived $message): void
    {
        $this->reply('Hello, '.$this->getUser()->getUsername().'!');
    }
}
