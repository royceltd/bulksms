<?php

namespace RoyceLtd\BulkSMS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class RoyceBulkSMSFacade
 * @package RoyceLtd\BulkSMS
 */
class RoyceBulkSMSFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'roycebulksms';
    }
}
