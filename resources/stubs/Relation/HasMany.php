<?php

declare(strict_types=1);

namespace Cycle\Annotated\Annotation\Relation;

use JetBrains\PhpStorm\ExpectedValues;

final class HasMany
{
    public function __construct(
        string $target,
        bool $cascade = true,
        bool $nullable = false,
        string $innerKey = null,
        string $outerKey = '{parentRole}_{innerKey}',
        array $where = [],
        array $orderBy = [],
        bool $fkCreate = true,
        #[ExpectedValues(values: ['NO ACTION', 'CASCADE', 'SET NULL'])]
        string $fkAction = 'CASCADE',
        bool $indexCreate = true,
        #[ExpectedValues(values: ['lazy', 'eager'])]
        string $load = 'lazy'
    ) {
    }
}
