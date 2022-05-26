<?php

namespace Dongrim\Toastr\Facades;

use Illuminate\Support\Facades\Facade;
use Dongrim\Toastr\Toastr as Toast;

class Toastr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Toast::class;
    }
}
