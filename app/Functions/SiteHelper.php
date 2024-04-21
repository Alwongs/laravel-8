<?php

namespace App\Functions;

class SiteHelper
{
    public static function hasAccessToSite($request)
    {
        if (
            !config('site.open')
            && (
                !isset($request['site_access_key']) 
                || (
                    isset($request['site_access_key']) 
                    && $request['site_access_key'] != config('site.access_key')
                )
            )
        ) {
            return false;
        } else {
            return true;
        }
    }    
}
