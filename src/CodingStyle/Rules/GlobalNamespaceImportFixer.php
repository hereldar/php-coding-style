<?php

declare(strict_types=1);

namespace Hereldar\CodingStyle\Rules;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer as BaseGlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\WhitespacesAwareFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;

final class GlobalNamespaceImportFixer extends AbstractFixer implements ConfigurableFixerInterface, WhitespacesAwareFixerInterface
{
    private ?BaseGlobalNamespaceImportFixer $fixer = null;

    public function getDefinition(): FixerDefinitionInterface
    {
        return $this->fixer()->getDefinition();
    }

    /**
     * {@inheritdoc}
     *
     * Must run after NoUnusedImportsFixer.
     */
    public function getPriority(): int
    {
        return -20;
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return $this->fixer()->isCandidate($tokens);
    }

    protected function applyFix(SplFileInfo $file, Tokens $tokens): void
    {
        $this->fixer()->applyFix($file, $tokens);
    }

    protected function createConfigurationDefinition(): FixerConfigurationResolverInterface
    {
        return $this->fixer()->createConfigurationDefinition();
    }

    private function fixer(): BaseGlobalNamespaceImportFixer
    {
        /**
         * @psalm-suppress MixedAssignment
         * @psalm-suppress MixedReturnStatement
         */
        return $this->fixer ??= new BaseGlobalNamespaceImportFixer();
    }
}
