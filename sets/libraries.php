<?php

declare(strict_types=1);

use Hereldar\CodingStyle;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig
    ::configure()
    ->withSets([
        CodingStyle::PROJECTS,
    ])
    ->withConfiguredRule(
        GlobalNamespaceImportFixer::class,
        ['import_classes' => true, 'import_constants' => false, 'import_functions' => false]
    )
    ->withConfiguredRule(
        YodaStyleFixer::class,
        ['equal' => true, 'identical' => true, 'less_and_greater' => true],
    );
