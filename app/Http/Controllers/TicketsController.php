<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketsController extends Controller
{
    //

    public function index()
    {
        $tickets = Ticket::all();

        return  view('tickets.index', compact('tickets'));
    }

    public function store()
    {
        Ticket::create(request(['title', 'description']));
        return redirect('/tickets');
    }
}
