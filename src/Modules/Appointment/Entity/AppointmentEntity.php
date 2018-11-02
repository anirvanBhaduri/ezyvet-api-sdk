<?php

namespace Modules\Appointment\Entity;

use Modules\Entity\Contracts\EntityContract;
use Modules\Entity\Entity;
use Modules\Query\Limit\LimitQuery;

/**
 * Class AppointmentEntity.
 *
 * @package Modules\AppointmentEntity\Entity
 *
 * @author Anirvan Bhaduri
 * @since 2nd Nov 2018
 */
class AppointmentEntity extends Entity
{
    /**
     * Limit the number of items retrieved.
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
}