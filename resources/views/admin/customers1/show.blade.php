@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">
        <i class="fas fa-user"></i> Customer Details
    </h1> <!-- Added icon to the title -->

    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(0, 0, 0, 0.7); color: white;"> <!-- Darker container for contrast -->
        <table class="table table-striped table-bordered mt-4 text-center"> <!-- Centered text -->
            <thead class="table-dark">
                <tr>
                    <th scope="col">Attribute</th> <!-- Changed column header -->
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $customer->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $customer->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $customer->email }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('admin.customers1.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">
            <i class="fas fa-arrow-left"></i> Back
        </a> <!-- Added icon to the button -->
    </div>
</div>
@endsection