<?php

if (!function_exists('toastr')) {
    /**
     * Toastr helper function
     *
     * @return \Dongrim\Toast\Toast
     */
    function toastr()
    {
        return app(\Dongrim\Toastr\Toastr::class);
    }
}
