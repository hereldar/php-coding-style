<?php

declare(strict_types=1);

use Hereldar\CodingStyle\Rules\ClarifyingParenthesesAroundComparisonsFixer;
use Hereldar\CodingStyle\Rules\MultilineWhitespaceBeforeDoubleColonFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig
    ::configure()
    ->withPhpCsFixerSets(
        php80Migration: true,
        php80MigrationRisky: true,
        per: true,
        perRisky: true,
        symfony: true,
    )
    ->withRules([
        ClarifyingParenthesesAroundComparisonsFixer::class,
        MultilineWhitespaceBeforeDoubleColonFixer::class,
    ])
    ->withConfiguredRule(
        PhpdocAlignFixer::class,
        ['align' => 'left'],
    )
    ->withConfiguredRule(
        YodaStyleFixer::class,
        ['equal' => false, 'identical' => false, 'less_and_greater' => false],
    );
