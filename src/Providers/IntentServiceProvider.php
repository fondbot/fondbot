<?php

declare(strict_types=1);

namespace App\Providers;

use App\ExampleIntent;
use FondBot\Conversation\FallbackIntent;
use FondBot\Conversation\IntentServiceProvider as BaseIntentServiceProvider;

class IntentServiceProvider extends BaseIntentServiceProvider
{
    /**
     * Define intents.
     *
     * @return string[]
     */
    public function intents(): array
    {
        return [
            ExampleIntent::class,
        ];
    }

    /**
     * Define fallback intent.
     *
     * @return string
     */
    public function fallbackIntent(): string
    {
        return FallbackIntent::class;
    }
}