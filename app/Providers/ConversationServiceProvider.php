<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Conversation\FallbackIntent;
use FondBot\Foundation\Providers\ConversationServiceProvider as ServiceProvider;

class ConversationServiceProvider extends ServiceProvider
{
    /**
     * Define bot intents.
     */
    protected $intents = [

    ];

    /**
     * This intent will run if no other intents are activated.
     */
    protected $fallbackIntent = FallbackIntent::class;

    public function configure(): void
    {
        $this->load(app_path('Intents'));
    }
}
