<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventPurchased;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $data['events'] = Event::where(['status' => true])->orderBy('date')->get();
        return view('events', $data);
    }

    public function show($id){
        $data['event'] = Event::find($id);
        return view('show', $data);
    }

    public function purchased(Request $request, $id){
        $data['event'] = Event::find($id);
        return view('purchased', $data);
    }

    public function store(Request $request, $id){
        $event = Event::find($id);
        $all = $request->all();
        $all['user_id'] = Auth::id();
        $all['event_id'] =  $id;
        EventPurchased::create($all);
        $m = "Compra efetuada com sucesso, logo será processado! São " . $all['amount'] . " Ingressos comprados no valor total de R$ " . number_format($all['amount'] * $event->price, 2, ',', '.');
        return redirect()->route('events.show', ['id' => $id])->with('status', $m);
    }
}
