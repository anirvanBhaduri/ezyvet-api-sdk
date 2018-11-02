<?php

namespace Modules\Query\Contracts;

/**
 * Interface QueryContract.
 *
 * @package Modules\Query\Contracts
 *
 * @author Anirvan Bhaduri
 * @since 2nd Nov 2018
 */
interface QueryContract
{
    /**
     * Produce the query as a string.
     *
     * i.e. query=theValue
     *
     * @return string
     */
    public function stringify(): string;

    /**
     * The query name.
     *
     * @return string
     */
    public function name(): string;
}
