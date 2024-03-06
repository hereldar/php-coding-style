<?php

declare(strict_types=1);

use Hereldar\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig
    ::configure()
    ->withSets([
        CodingStyle::LIBRARIES,
    ])
    ->withPaths([
        __DIR__ . '/sets',
        __DIR__ . '/src',
    ])
    ->withRootFiles();
