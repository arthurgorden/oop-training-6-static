<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return $this->light = true;
        } else {
            return $this->light = false;
        }
    }

    public function switchOff(): bool
    {
        return $this->light = false;
    }

    public function getLightState(): string
    {
        if ($this->light === true) {
            return 'true';
        } else if ($this->light === false) {
            return 'false';
        };
    }
}
