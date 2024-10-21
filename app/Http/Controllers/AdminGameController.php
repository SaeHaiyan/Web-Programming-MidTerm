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
        Game::create($request->all());
        return redirect()->route('admin.games1.index');
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