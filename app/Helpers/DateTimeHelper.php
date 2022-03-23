<?php

namespace App\Helpers;

class DateTimeHelper
{
    public static function durationToHumans($duration)
    {
        $data = explode(":", $duration);

        $string = '';

        // hours
        if ($data[0] > 0) {
            $string .= "{$data[0]}h";
        }

        // minutes
        if ($data[1] > 0) {
            $string .= " {$data[1]}m";
        }

        return $string;
    }
}
