@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">
        <i class="fas fa-user"></i> Customer Details
    </h1> <!-- Added icon to the title -->

    <div class="card shadow-lg" style="border-radius: 15px; background-color: rgba(0, 0, 0, 0.7); color: white; max-width: 400px; margin: auto;"> 
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover text-white text-center"> <!-- Added borders and stripes for better visibility -->
                <thead class="thead-dark"> <!-- Dark background for the header -->
                    <tr>
                        <th scope="col">Attribute</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>ID</strong></td>
                        <td>{{ $customer->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <td><strong>Phone</strong></td>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('admin.customers1.index') }}" class="btn" style="background-color: #FF8F00; color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                <i class="fas fa-arrow-left"></i> Back
            </a> <!-- Added icon to the button -->
        </div> <!-- End of card body -->
    </div> <!-- End of card -->
</div>
@endsection
