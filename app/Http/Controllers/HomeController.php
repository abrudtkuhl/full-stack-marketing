<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    function welcome() {
        $client = new Client();
        $result = $client->post('www.google-analytics.com/collect/?v=1&t=event&tid='.env('GTM_ID').'&cid='.env('GTM_CID').'&event_label=analyticsdemo.xyz&event_category=homepage&event_action=Page View');
        
        return view('welcome');
    }
}