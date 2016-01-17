<?php

namespace ViewTags;

use Illuminate\Support\Facades\Facade;

class ViewTags extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view.tags';
    }
}
