<?php

namespace App\Http\Controllers;
use App\Models\Ticket;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getTickets(){
        $tickets = Ticket::all();
        return $tickets;
    }
}
