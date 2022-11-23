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
                            <div class="row ">
                                <div class="col d-flex justify-content-between">
                                    <div>
                                        <h5 class="card-title ">Products</h5>
                                    </div>
                                    <div class="col-md-4 mb-3">CATEGORY LIST
                                        <select class="form-select col-md-4" name="cate_id" aria-label="Default select example">
                                            <option value="">Category List</option>  
                                            @foreach($category as $item) 
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach                                                                             
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text mt-2 flex justify-center">
                                <table class="flex justify-center table table-striped ">
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
                                                <img src="{{ asset('assets/product/' . $products->file) }}" width="250px" height="250px"  alt=""></a>
                                        </td>
                                        <td>{{ $products['price'] }}</td>                                   
                                    </tr>
                                    @endforeach
                                    
                                </table>                            
                        </div>                
    </div> 
@endsection

