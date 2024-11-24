<?php

namespace IBroStudio\GoCardless\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IBroStudio\GoCardless\GoCardless
 */
class GoCardless extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \IBroStudio\GoCardless\GoCardless::class;
    }
}
