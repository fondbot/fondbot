<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Toolbelt\Command;
use FondBot\Toolbelt\ToolbeltServiceProvider as BaseToolbeltServiceProvider;

class ToolbeltServiceProvider extends BaseToolbeltServiceProvider
{
    /**
     * Console commands.
     *
     * @return Command[]
     */
    public function commands(): array
    {
        return [];
    }
}
