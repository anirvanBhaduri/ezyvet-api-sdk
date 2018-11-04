<?php

namespace Modules\Entity\Contracts;

/**
 * Interface EntityContract.
 *
 * @package Modules\Entity\Contracts
 *
 * @author Anirvan Bhaduri
 * @since 2nd Nov 2018
 */
interface EntityContract
{
    /**
     * Limit the number of records retrieved when doing a fetch.
     *
     * @param int $limit
     *
     * @return EntityContract
     */
    public function limit(int $limit): EntityContract;
}