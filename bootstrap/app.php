<?php

require __DIR__ . '/../vendor/autoload.php';

return new FondBot\Platform\Application(
    realpath(__DIR__ . '/../')
);

