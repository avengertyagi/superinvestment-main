<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;


class FactorSettings extends Settings
{
    public float $superinvest;

    public float $cbonds;

    public float $ppfs;

    public float $fds;

    public static function group(): string
    {
        return 'factors';
    }

}
