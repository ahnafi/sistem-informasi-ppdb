<?php

namespace App\Services;

use Carbon\Carbon;

class Nis
{
    public static function generate(int $registrationId, Carbon $birth): string
    {
        $year = now()->format('y');
        $birthFormatted = $birth->format('dmy');
        $regId = str_pad($registrationId, 3, '0', STR_PAD_LEFT);

        return $year . $birthFormatted . $regId;
    }
}
