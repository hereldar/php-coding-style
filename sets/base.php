<?php

declare(strict_types=1);

use Hereldar\CodingStyle\Rules\ClarifyingParenthesesAroundComparisonsFixer;
use Hereldar\CodingStyle\Rules\MultilineWhitespaceBeforeDoubleColonFixer;
use PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer;
use PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer;
use PhpCsFixer\Fixer\Operator\OperatorLinebreakFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderByValueFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\StringNotation\StringImplicitBackslashesFixer;
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
    ->withConfiguredRule(
        GlobalNamespaceImportFixer::class,
        ['import_classes' => true, 'import_constants' => false, 'import_functions' => false],
    )
    ->withConfiguredRule(
        OperatorLinebreakFixer::class,
        ['position' => 'beginning'],
    )
    ->withConfiguredRule(
        PhpdocAlignFixer::class,
        ['align' => 'left'],
    )
    ->withConfiguredRule(
        PhpdocNoAliasTagFixer::class,
        ['replacements' => ['type' => 'var', 'link' => 'see']],
    )
    ->withConfiguredRule(
        PhpdocSeparationFixer::class,
        ['groups' => [
            ['deprecated', 'link', 'see', 'since'],
            ['author', 'copyright', 'license'],
            ['category', 'package', 'subpackage'],
            ['property', 'property-read', 'property-write', 'phpstan-property', 'phpstan-property-read', 'phpstan-property-write', 'psalm-property', 'psalm-property-read', 'psalm-property-write'],
            ['pure', 'phpstan-pure', 'psalm-pure'],
            ['param', 'phpstan-param', 'psalm-param'],
            ['return', 'phpstan-return', 'psalm-return'],
            ['throws', 'phpstan-throws', 'psalm-throws'],
        ]],
    )
    ->withConfiguredRule(
        PhpdocToCommentFixer::class,
        ['ignored_tags' => ['var', 'phpstan-var', 'psalm-var', 'phpstan-ignore-next-line', 'psalm-suppress']],
    )
    ->withConfiguredRule(
        StringImplicitBackslashesFixer::class,
        ['single_quoted' => 'ignore'],
    )
    ->withSpacing(
        indentation: ECS::INDENTATION_SPACES,
        lineEnding: PHP_EOL
    );
