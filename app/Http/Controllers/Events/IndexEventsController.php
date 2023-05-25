<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexEventsController extends Controller
{
    public function __invoke()
    {
        return view('events.index');
    }
}
