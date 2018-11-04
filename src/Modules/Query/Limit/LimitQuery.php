<?php

namespace Modules\Query\Limit;

use Modules\Query\Contracts\QueryContract;

/**
 * Class LimitQuery.
 *
 * @package Modules\Query\Limit
 *
 * @author Anirvan Bhaduri
 * @since 2nd Nov 2018
 */
class LimitQuery implements QueryContract
{
    /**
     * The name of the limit query.
     *
     * @var string
     */
    const NAME = 'limit';

    /**
     * The limit value.
     *
     * @var int
     */
    protected $limit = 10;

    /**
     * LimitQuery constructor.
     *
     * @param int $limit
     *
     * @return void
     */
    public function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * {@inheritdoc}
     */
    public function stringify(): string
    {
        $name = static::NAME;

        return "{$name}={$this->limit}";
    }

    /**
     * Get the Limit Query name.
     *
     * @return string
     */
    public function name(): string
    {
        return static::NAME;
    }
}
