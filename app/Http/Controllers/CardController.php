<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        /* Grab all the cards from the database */
        $cards = Card::all();

        return view('index', compact('cards'));
    }
}
