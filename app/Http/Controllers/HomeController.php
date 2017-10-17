<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    function welcome() {
        $client = new Client();
        $result = $client->post('www.google-analytics.com/collect/?v=1&t=event&tid='.env('GTM_ID').'&cid=2a9c887b-d682-482f-9ede-c87b995aa2c3&event_label=analyticsdemo.xyz&event_category=homepage&event_action=Page View' );       
        dd($result);
        return view('welcome');
    }
}