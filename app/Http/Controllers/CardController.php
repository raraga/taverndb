<?php

namespace App\Http\Controllers;

use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        /* Grab all the cards from the database */
        $cards = Card::all();

        /* Get all possible ranks a card can be and use for navigation filter */
        $ranks = Card::select('rank')->distinct()->orderBy('rank', 'asc')->get();

        return view('index', compact('cards'), compact('ranks'));
    }

    public function show($id)
    {
        $card = Card::find($id);
        return view('card.show', compact('card'));
    }

    public function rank($rank)
    {
        $cards = Card::where('rank','=', $rank)->get();

        /* Sad face this isn't DRY */
        $ranks = Card::select('rank')->distinct()->orderBy('rank', 'asc')->get();

        return view('index', compact('cards'), compact('ranks'));
    }
}
