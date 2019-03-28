<?php declare(strict_types=1);
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Cycle\Annotated\Tests\Fixtures;

/**
 * @entity
 */
class Simple
{
    /**
     * @column(type=primary)
     * @var int
     */
    protected $id;
}