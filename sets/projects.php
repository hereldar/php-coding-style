<?php

declare(strict_types=1);

use Hereldar\CodingStyle\Rules\ClarifyingParenthesesAroundComparisonsFixer;
use Hereldar\CodingStyle\Rules\MultilineWhitespaceBeforeDoubleColonFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig
    ::configure()
    ->withPhpCsFixerSets(
        per: true,
        php80Migration: true,
        php80MigrationRisky: true,
    )
    ->withRules([
        ClarifyingParenthesesAroundComparisonsFixer::class,
        MultilineWhitespaceBeforeDoubleColonFixer::class,
    ]);
