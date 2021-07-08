<?php

declare(strict_types=1);

namespace Cycle\Annotated\Annotation\Table;

use Cycle\Annotated\Annotation\Column;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation
 * @Target("ANNOTATION", "CLASS")
 * @Attributes({
 *      @Attribute("columns", type="array<string>", required=true),
 * })
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class PrimaryKey
{
    /** @var array<string> */
    private $columns = [];

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        foreach ($values as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * @return Column[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }
}