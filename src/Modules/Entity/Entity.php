<?php

namespace Modules\Entity;

use Modules\Builder\Builder;
use Modules\Entity\Contracts\EntityContract;
use Modules\Query\Limit\LimitQuery;

/**
 * Class Entity.
 *
 * @package Modules\Entity
 *
 * @author Anirvan Bhaduri
 * @since 2nd Nov 2018
 */
abstract class Entity implements EntityContract
{
    /**
     * A Builder instance.
     *
     * @var Builder
     */
    protected $builder;

    /**
     * Entity constructor.
     *
     * @param int $id
     *
     * @return void
     */
    public function __construct(int $id = 0)
    {
        $this->builder = new Builder();

        $this->builder->filter(new LimitQuery(10));
    }

    /**
     * {@inheritdoc}
     */
    abstract function limit(int $limit): EntityContract;

    // TODO: implement abstract get function
    // TODO: add method to EntityContract
}
