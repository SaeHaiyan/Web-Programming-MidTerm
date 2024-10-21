<?php

// app/Http/Controllers/CustomerController.php
namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers1.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customers1.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('admin.customers1.index');
    }

    public function show(Customer $customer)
    {
        return view('admin.customers1.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('admin.customers1.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('admin.customers1.index')->with('success', 'Customer updated successfully!');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('admin.customers1.index');
    }
}