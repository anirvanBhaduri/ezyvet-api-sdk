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
     * Limit the number of records retrieved when doing a fetch.
     *
     * @param int $limit
     *
     * @return EntityContract
     */
    public function limit(int $limit): EntityContract
    {
        $this->builder->filter(new LimitQuery($limit));

        return $this;
    }

    // TODO: implement abstract retrieve function
    // TODO: add method to EntityContract
    // TODO: create appointment entity fields - i.e. id, modified_at etc.
    // TODO: create fields contract - this can then be used on FieldQuery
}
