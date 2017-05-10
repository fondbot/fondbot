<?php

declare(strict_types=1);

namespace App;

use FondBot\Conversation\Activators\Activator;
use FondBot\Conversation\Intent;

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

    /**
     * Run intent.
     */
    public function run(): void
    {
        $this->sendMessage('Hello, '.$this->getUser()->getUsername().'!');
    }
}
