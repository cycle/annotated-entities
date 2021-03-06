<?php

declare(strict_types=1);

namespace Cycle\Annotated\Annotation;

final class Entity
{
    public function __construct(
        string $role = null,
        string $mapper = null,
        string $repository = null,
        string $table = null,
        string $database = null,
        string $source = null,
        string $constrain = null,
        /** @var array<Column> */
        array $columns = [],
    ) {
    }
}
