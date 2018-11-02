<?php

namespace Modules\Builder\Contracts;

use Modules\Query\Contracts\QueryContract;

/**
 * Interface BuilderContract.
 *
 * @package Modules\Builder\Contracts
 *
 * @author Anirvan Bhaduri
 * @since 3rd Nov 2018
 */
interface BuilderContract
{
    /**
     * Add a query to the builder.
     *
     * @param QueryContract $query
     *
     * @return BuilderContract
     */
    public function filter(QueryContract $query): BuilderContract;
}
