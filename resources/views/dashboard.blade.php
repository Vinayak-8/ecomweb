@extends('layouts.app')
@section('title', 'Dashboard')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

@section('content')
    <div class="card">
                        <div class=" card-body">
                            <h5 class="card-title ">Products</h5>
                            <p class="card-text mt-2 flex justify-center">
                                <table class="flex justify-center table table-striped ">
                                    <tr>
                                        <th>name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                    @foreach($products as $products)
                                    <tr>
                                        <td>{{ $products['name'] }}</td>
                                        <td>{{ $products['description'] }}</td>
                                        <td>
                                                <img src="{{ asset('assets/product/' . $products->file) }}" width="250px" height="250px"  alt=""></a>
                                        </td>
                                        <td>{{ $products['price'] }}</td>                                   
                                    </tr>
                                    @endforeach
                                    
                                </table>                            
                        </div>                
    </div> 
@endsection

