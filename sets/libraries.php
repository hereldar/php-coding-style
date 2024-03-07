<?php

declare(strict_types=1);

use Hereldar\CodingStyle;
use PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig
    ::configure()
    ->withSets([
        CodingStyle::PROJECTS,
    ])
    ->withConfiguredRule(
        NativeConstantInvocationFixer::class,
        ['scope' => 'namespaced', 'strict' => true],
    )
    ->withConfiguredRule(
        NativeFunctionInvocationFixer::class,
        ['include' => ['@all'], 'scope' => 'namespaced', 'strict' => true],
    )
    ->withConfiguredRule(
        YodaStyleFixer::class,
        ['equal' => true, 'identical' => true, 'less_and_greater' => true],
    );
