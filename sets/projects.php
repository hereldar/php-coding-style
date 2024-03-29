<?php

declare(strict_types=1);

use Hereldar\CodingStyle;
use Hereldar\CodingStyle\Rules\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\ClassNotation\FinalClassFixer;
use PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer;
use PhpCsFixer\Fixer\ClassUsage\DateTimeImmutableFixer;
use PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
use PhpCsFixer\Fixer\Operator\OperatorLinebreakFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\StringNotation\StringImplicitBackslashesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig
    ::configure()
    ->withSets([
        CodingStyle::BASE,
    ])
    ->withSkip([
        NativeConstantInvocationFixer::class,
        NativeFunctionInvocationFixer::class,
    ])
    ->withRules([
        DateTimeImmutableFixer::class,
        FinalClassFixer::class,
        ProtectedToPrivateFixer::class,
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
            ['author', 'copyright', 'license'],
            ['category', 'package', 'subpackage'],
            ['property', 'property-read', 'property-write', 'phpstan-property', 'phpstan-property-read', 'phpstan-property-write', 'psalm-property', 'psalm-property-read', 'psalm-property-write'],
            ['pure', 'phpstan-pure', 'psalm-pure'],
            ['param', 'phpstan-param', 'psalm-param'],
            ['return', 'psalm-return', 'phpstan-return'],
            ['throws', 'phpstan-throws', 'psalm-throws'],
            ['deprecated', 'link', 'see', 'since'],
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
    ->withConfiguredRule(
        YodaStyleFixer::class,
        ['equal' => false, 'identical' => false, 'less_and_greater' => false],
    );
