<?php

namespace Blijnder\LaravelAtlas;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Blijnder\LaravelAtlas\Skeleton\SkeletonClass
 */
class LaravelAtlasFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-atlas';
    }
}
