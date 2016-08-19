<?php
namespace JellyBool\Hashing\Facades;


use Illuminate\Support\Facades\Facade;

class Hash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}