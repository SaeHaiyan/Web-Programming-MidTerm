<?php

// app/Http/Controllers/GameController.php
namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'title' => 'required',
        'genre' => 'nullable',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle file upload
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
    } else {
        $imageName = null; // If no image is uploaded
    }

    // Create the game record
    Game::create([
        'title' => $request->title,
        'genre' => $request->genre,
        'price' => $request->price,
        'image' => $imageName, // Store the image path in the database
    ]);

    return redirect()->route('games.index')->with('success', 'Game created successfully.');
}


    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('games.index');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}