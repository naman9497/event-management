<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Models\Events;
use App\Models\Tickets;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'event_name'=>'required',
            'event_description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'organiser' => 'required'
        ]);

        $event = new Events(array(
            'name' => request('event_name'),
            'description' => request('event_description'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'organiser' => request('organiser'),
        ));

        $event->save();
        
        if(request('ticket')){
            $tickets = array_values(request('ticket'));
            $event->tickets()->createMany($tickets);
        }


        return redirect()->route('events.index');

    }

 


}
