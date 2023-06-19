<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Event;

class EventController extends Controller
{
    public function add(){
        $r=request();//get data from the html input
        $addEvent=Event::create([
            'name'=> $r->eventName,
            'time' => $r ->eventTime,
            'date'=> $r ->eventDate,
            'status'=> "Haven't done",
         
        ]);

        return view('AddEvent');
    } 

    public function insert(){
        return view ('AddEvent');
    }

    public function view(){
        $viewEvent = Event::all();//Automatci write sql for u (Select all the event to u)
        return view('Home')->with('Events',$viewEvent); 
    }

    public function edit($id){
        $Events=Event::all()->where('id',$id);
        return view('EditEvent')->with('Events',$Events);
    }

    public function update(){
        $r=request();
        $event=Event::find($r->id);//retrive data from event

        $event->name=$r->eventName;//binding data with html input (Name:xxx)
        $event->time=$r->eventTime;
        $event->date=$r->eventDate;
        $event->status=$r->eventStatus;
        $event->save();//save the date to Mysql

        return redirect()->route('ShowEvent'); //if return page + function if not then use return view
    }

    public function delete($id){
        $event=Event::find($id);
        $event->delete();//delete from database where id=$id

        return redirect()->route('ShowEvent');
    }
}