<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store($gameId)
    {
        $user = Auth::user();

        // Check if the game is already in favorites
        if ($user->favorites()->where('game_id', $gameId)->exists()) {
            return redirect()->back()->with('message', 'Game is already in favorites!');
        }

        $user->favorites()->attach($gameId); // This should use "favorites()"
        return redirect()->back()->with('message', 'Game added to favorites!');
    }

    public function index()
    {
        $favorites = Auth::user()->favorites; // Ensure this uses "favorites"
        return view('favorites.index', compact('favorites'));
    }

    public function destroy($gameId)
    {
        $user = Auth::user();
        $user->favorites()->detach($gameId); // Ensure this uses "favorites"
        return redirect()->route('favorites.index')->with('message', 'Game removed from favorites!');
    }
}
