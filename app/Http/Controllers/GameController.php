<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return view('home', ['games' => Game::all()]);
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function login()
    {
        return view('login');
    }

    public function show(int $id)
    {
        return view('game-detail', ['game' => Game::findOrFail($id)]);
    }
}
