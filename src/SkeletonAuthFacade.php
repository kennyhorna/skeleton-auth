<?php

namespace Kennyhorna\SkeletonAuth;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kennyhorna\SkeletonAuth\Skeleton\SkeletonClass
 */
class SkeletonAuthFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton-auth';
    }
}
