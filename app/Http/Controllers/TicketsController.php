<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;
use Illuminate\Support\Str;


class TicketsController extends Controller
{
    public function viewtemplate(){
        $event = Event::all();
        
        return view('ticket',[
            'events' => $event
        ]);
    }

    public function viewTickets(){
        $ticket = Ticket::all();
        $event = Event::all();

        return view('view-ticket',[
            'tickets' => $ticket,
            'events' => $event
        ]);
    }
    
    public function createTickets(Request $request){
        $ticket = Ticket::all();
        $events = Event::all();
        
        $request;
        $newTicket = new Ticket();
        $newTicket->user_id = Auth::user()->id;
        $newTicket->qr_hash = Str::random(50);
        $newTicket->event_id = $request->input('event');
        $newTicket->save();
        
        return redirect() ->route('view-tickets');
    }

    public function editTicket(Request $request, $Ticketid)
    {
        $ticket = Ticket::findorFail($Ticketid);
        
        $ticket->save();
    }

    public function viewTicket($Ticketid)
    {
        $ticket = Ticket::findorfail($Ticketid);

        return view('ticket',[
            'ticket' => $ticket
        ]);
    }

    
    public function deleteTicket($Ticketid)
    {
        $ticket = Ticket::findorFail($Ticketid);
        $ticket->delete();

        return redirect('view-ticket');
    }
}
