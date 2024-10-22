@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Customers</h1>

    <div class="card shadow-sm p-4 mb-4" style="border-radius: 10px; background-color: rgba(0, 0, 0, 0.7);">
        <a href="{{ route('customers.create') }}" class="btn btn-lg mb-4" style="background-color: rgb(0, 255, 34); color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">Add Customer</a>
        
        <div class="row">
            @foreach($customers as $customer)
                <div class="col-md-4 mb-4">
                    <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.15); border-radius: 10px; border: none; padding: 20px;">
                        <h5 class="card-title" style="color: rgb(5, 130, 175); font-family: 'Press Start 2P', cursive;">{{ $customer->name }}</h5>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%; margin-bottom: 5px;">View</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%;">Edit</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
