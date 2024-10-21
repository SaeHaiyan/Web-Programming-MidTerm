<?php

// app/Http/Controllers/RentalController.php
namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Customer;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminRentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with(['customer', 'game'])->get();
        return view('admin.rentals1.index', compact('rentals'));
    }

    public function create()
        {
            $customers = Customer::all();
            $games = Game::all();
            return view('admin.rentals1.create', compact('customers', 'games'));
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

            return redirect()->route('admin.rentals1.index')->with('success', 'Rental created successfully.');
        }


    public function show(Rental $rental)
    {
        return view('admin.rentals1.show', compact('rental'));
    }

    public function edit(Rental $rental)
        {
            $customers = Customer::all();
            $games = Game::all();
            return view('admin.rentals1.edit', compact('rental', 'customers', 'games'));
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

            return redirect()->route('admin.rentals1.index')->with('success', 'Rental updated successfully.');
        }


    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('admin.rentals1.index');
    }
}