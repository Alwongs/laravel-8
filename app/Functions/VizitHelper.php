<?php

namespace App\Functions;

use App\Models\Vizit;
use ElFactory\IpApi\IpApi;

class VizitHelper
{
    public static function saveVizit($server)
    {
        if (!empty($server['REMOTE_ADDR'])) {
            $response = IpApi::default($_SERVER['REMOTE_ADDR'])->fields(['city', 'country'])->lang('ru')->lookup();
        }

        $vizit['query_string'] = $server['QUERY_STRING'];
        $vizit['request_uri'] = $server['REQUEST_URI'];
        $vizit['ip_address'] = $server['REMOTE_ADDR'];
        $vizit['user_agent'] = $server['HTTP_USER_AGENT'];
        $vizit['city'] = !empty($response['city']) ? $response['city'] : "";
        $vizit['country'] = !empty($response['country']) ? $response['country'] : "";

        Vizit::create($vizit);
    }    
}
