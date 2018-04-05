<?php namespace Prullenbak\LaravelTikkie;

use PHPTikkie\PHPTikkie;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return PHPTikkie::class;
    }
}