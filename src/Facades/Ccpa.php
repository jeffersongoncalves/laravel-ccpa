<?php

namespace JeffersonGoncalves\Ccpa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeffersonGoncalves\Ccpa\Ccpa
 */
class Ccpa extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-ccpa';
    }
}
