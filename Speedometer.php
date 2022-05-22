<?php

class Speedometer
{
    public const MILES_CONVERTER = 0.621371;
    public const KM_CONVERTER = 1.60934;

    public static function convertKmToMiles(float $distance): float
    {
        return $distance * self::MILES_CONVERTER;
    }

    public static function convertMilesToKm(float $distance): float
    {
        return $distance * self::KM_CONVERTER;
    }
}