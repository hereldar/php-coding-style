<?php

declare(strict_types=1);

use Hereldar\CodingStyle;
use PhpCsFixer\Fixer\ClassNotation\FinalClassFixer;
use PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer;
use PhpCsFixer\Fixer\ClassUsage\DateTimeImmutableFixer;
use PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
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
        YodaStyleFixer::class,
        ['equal' => false, 'identical' => false, 'less_and_greater' => false],
    );
