<?php

require_once 'ChargingStation.php';
require_once 'RechargeableInterface.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{
    public function charge(int $percentage): int
    {
        return $this->$percentage;
    }

    public function unLoad(int $percentage): int
    {
        return $this->$percentage;
    }
}
