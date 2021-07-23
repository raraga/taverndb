<?php

namespace App\Http\Controllers;

use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        /* Grab all the cards from the database */
        $cards = Card::all();

        return view('index', compact('cards'));
    }

    public function show($id)
    {
        $card = Card::find($id);

        return view('card.show', compact('card'));
    }
}
