<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IndexEventsController extends Controller
{
    public function __invoke()
    {
        $client = new Client();

        $response = $client->get('https://yyjiw2lpie.execute-api.us-east-1.amazonaws.com/dev/v1');

        $events = json_decode($response->getBody(), true);

        return view('events.index', ['events' => $events]);
    }
}
