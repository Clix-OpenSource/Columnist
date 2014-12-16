<?php namespace Clix\Columnist\Facades;

use Illuminate\Support\Facades\Facade;

class Laravel extends Facade {
    /**
     * Name of the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'columnist';
    }
}
