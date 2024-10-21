@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">
        <i class="fas fa-user-plus"></i> Create User
    </h1> <!-- Added icon to the heading -->

    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(0, 0, 0, 0.7); color: white;"> <!-- Darker container for contrast -->
        <form action="{{ route('admin.customers1.store') }}" method="POST">
            @csrf
            
            <div class="form-group mb-4">
                <label for="name" class="font-weight-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" required style="border-radius: 5px;"/>
            </div>
            
            <div class="form-group mb-4">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" required style="border-radius: 5px;"/>
            </div>
            
            <div class="form-group mb-4">
                <label for="phone" class="font-weight-bold">Phone</label>
                <input type="phone" class="form-control" id="phone" name="phone" required style="border-radius: 5px;"/>
            </div>
            
            <button type="submit" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                <i class="fas fa-user-plus"></i> Create
            </button> <!-- Added icon to button -->
        </form>
    </div>
</div>
@endsection