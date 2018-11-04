<?php

namespace Modules\Builder;

use Modules\Builder\Contracts\BuilderContract;
use Modules\Query\Contracts\QueryContract;

/**
 * Class Builder.
 *
 * @package Modules\Builder
 *
 * @author Anirvan Bhaduri
 * @since 3rd Nov 2018
 */
class Builder implements BuilderContract
{
    /**
     * The build array.
     *
     * @var array
     */
    protected $build = [];

    /**
     * Add a query filter to the builder.
     *
     * @param QueryContract $query
     *
     * @return BuilderContract
     */
    public function filter(QueryContract $query): BuilderContract
    {
        $this->build[$query->name()] = $query;

        return $this;
    }
}
