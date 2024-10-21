@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Customers</h1> <!-- Changed title -->

    <div class="card shadow-sm p-4 mb-4" style="border-radius: 10px; background-color:  rgba(0, 0, 0, 0.7);">
        <a href="{{ route('admin.customers1.create') }}" class="btn btn-lg mb-4" style="background-color:rgb(0, 255, 34); color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">Add customer</a> <!-- Changed button color and width -->
        
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <a href="{{ route('admin.customers1.show', ['id' => $customer->id]) }}" class="btn btn-sm" style="background-color:rgb(5, 130, 175); color: white;">View</a> <!-- Changed button color -->
                            <a href="{{ route('admin.customers1.edit', ['id' => $customer->id]) }}" class="btn btn-sm" style="background-color: rgb(5, 130, 175); color: white;">Edit</a> <!-- Changed button color -->
                            <form action="{{ route('admin.customers1.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm" style="background-color: black; color: white;">Delete</button> <!-- Changed button color -->
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection