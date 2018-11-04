<?php

namespace Tests\Modules\Appointment;

use Modules\Appointment\Entity\AppointmentEntity;
use Modules\Entity\Contracts\EntityContract;
use PHPUnit\Framework\TestCase;

/**
 * Class AppointmentEntityTest.
 *
 * @package Modules\Appointment
 *
 * @author Anirvan Bhaduri
 * @since 3rd Nov 2018
 */
class AppointmentEntityTest extends TestCase
{
    /**
     * Test adding a limit filter to an appointment entity returns
     * an EntityContract.
     *
     * @runInSeparateProcess
     * @covers \Modules\Appointment\Entity\AppointmentEntity::limit
     *
     * @return void
     */
    public function testAddLimitFilterToAppointmentEntityReturnsEntityContract()
    {
        $apptEntity = new AppointmentEntity();

        $entity = $apptEntity->limit(10);

        $this->assertInstanceOf(
            EntityContract::class,
            $entity,
            "The return value of \"limit\" was not an EntityContract."
        );
    }
}
