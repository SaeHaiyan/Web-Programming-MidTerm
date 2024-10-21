<?php

// app/Http/Controllers/gameController.php
namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class AdminGameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('admin.games1.index', compact('games'));
    }

    public function create()
    {
        return view('admin.games1.create');
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

        return redirect()->route('admin.games1.index')->with('success', 'Game created successfully.');
    }

    public function show(game $game)
    {
        return view('admin.games1.show', compact('game'));
    }

    public function edit(game $game)
    {
        return view('admin.games1.edit', compact('game'));
    }

    public function update(Request $request, game $game)
    {
        $game->update($request->all());
        return redirect()->route('admin.games1.index')->with('success', 'game updated successfully!');
    }

    public function destroy(game $game)
    {
        $game->delete();
        return redirect()->route('admin.games1.index');
    }
}