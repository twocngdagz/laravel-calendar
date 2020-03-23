<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\Http\Controllers\Controller;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::all(['title', 'date']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periods = CarbonPeriod::create($request->get('from'), $request->get('to'));
        $days = $request->only(['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']);

        $daysTocheck = collect($days)->filter(function ($day) {
            return $day;
        })->keys()->all();

        foreach ($periods as $period) {
            if (in_array($period->isoFormat('dddd'), $daysTocheck)) {
                Event::firstOrCreate([
                    'title' => $request->get('title'),
                    'date' => $period->toDateString()
                ]);
            } else {
                Event::where('title', $request->get('title'))->where('date', $period->toDateString())->delete();
            }
        }
    }
}
