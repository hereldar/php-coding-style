<?php

declare(strict_types=1);

use Hereldar\CodingStyle\Rules\ClarifyingParenthesesAroundComparisonsFixer;
use Hereldar\CodingStyle\Rules\MultilineWhitespaceBeforeDoubleColonFixer;
use PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer;
use PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderByValueFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use Symplify\CodingStandard\Fixer\Strict\BlankLineAfterStrictTypesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option as ECS;

return ECSConfig
    ::configure()
    ->withPhpCsFixerSets(
        php80Migration: true,
        php80MigrationRisky: true,
        per: true,
        perRisky: true,
        symfony: true,
        symfonyRisky: true,
    )
    ->withRules([
        ArrayIndentationFixer::class,
        BlankLineAfterStrictTypesFixer::class,
        ClarifyingParenthesesAroundComparisonsFixer::class,
        CombineConsecutiveIssetsFixer::class,
        CombineConsecutiveUnsetsFixer::class,
        ExplicitStringVariableFixer::class,
        MethodChainingIndentationFixer::class,
        MultilineCommentOpeningClosingFixer::class,
        MultilineWhitespaceBeforeDoubleColonFixer::class,
        NoUselessElseFixer::class,
        PhpdocOrderByValueFixer::class,
        PhpUnitDedicateAssertFixer::class,
        PhpUnitDedicateAssertInternalTypeFixer::class,
        PhpUnitExpectationFixer::class,
        SelfStaticAccessorFixer::class,
        SimplifiedIfReturnFixer::class,
        SingleLineEmptyBodyFixer::class,
    ])
    ->withSpacing(
        indentation: ECS::INDENTATION_SPACES,
        lineEnding: PHP_EOL
    );
