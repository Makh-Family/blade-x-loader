<?php

/**
 * Custom helper functions
 */


/**
 * Checks the request is ajax and returns necessary layout
 * 
 * @param string $default
 * @param string $ajax
 * 
 * @return string
 */

if (!function_exists('pjaxLayout')) {
    function pjaxLayout($default)
    {
        return
            request()->pjax()
            ? "blade-x-loader::layout"
            : $default;
    }
}
