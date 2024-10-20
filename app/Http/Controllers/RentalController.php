<?php

// app/Http/Controllers/RentalController.php
namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Customer;
use App\Models\Game;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with(['customer', 'game'])->get();
        return view('rentals.index', compact('rentals'));
    }

    public function create()
        {
            $customers = Customer::all();
            $games = Game::all();
            return view('rentals.create', compact('customers', 'games'));
        }


    public function store(Request $request)
        {
            $request->validate([
                'customer_id' => 'required|exists:customers,id',
                'game_id' => 'required|exists:games,id',
                'rental_date' => 'required|date',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            Rental::create($request->all());

            return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
        }


    public function show(Rental $rental)
    {
        return view('rentals.show', compact('rental'));
    }

    public function edit(Rental $rental)
        {
            $customers = Customer::all();
            $games = Game::all();
            return view('rentals.edit', compact('rental', 'customers', 'games'));
        }


    public function update(Request $request, Rental $rental)
        {
            $request->validate([
                'customer_id' => 'required|exists:customers,id',
                'game_id' => 'required|exists:games,id',
                'rental_date' => 'required|date',
                'return_date' => 'nullable|date',
            ]);

            $rental->update($request->all());

            return redirect()->route('rentals.index')->with('success', 'Rental updated successfully.');
        }


    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index');
    }
}