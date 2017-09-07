<?php

require __DIR__.'/../vendor/autoload.php';

$app = new FondBot\Framework\Application(
    realpath(__DIR__.'/../')
);

$app->register(Bot\Providers\ConversationServiceProvider::class);

return $app;