@extends('layouts.app')
@section('title', 'View Product')

@section('content')
    

    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col d-flex justify-content-between">
                    <div>
                        <h5 class="card-title "> CATEGORY :- <U>{{$category->name}}</U></h5>
                    </div>
                    <div>
                        <a href="{{ URL::previous() }}"><button type="button" class="btn btn-danger">BACK</button></a>
                    </div>                                  
                </div>
            </div>
            <table class="table table-striped mt-2">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                </tr>
                @foreach($products as $products)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $products['name'] }}</td>
                        <td>{{ $products['description'] }}</td>
                        <td>
                                <img src="{{ asset('assets/product/' . $products->file) }}" height="250px" width="250px" alt=""></a>
                        </td>                                        
                        <td>{{ $products['price'] }}</td>                                   
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection