@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="card">
                        <div class=" card-body">
                            <div class="row ">
                                <div class="col d-flex justify-content-between">
                                    <div>
                                        <h5 class="card-title ">Products</h5>
                                    </div>
                                    <div>
                                        <form  action="{{route('searchProduct')}}" class="d-flex gap-1">
                                            <input type="text" id="search" name="q" placeholder="SEARCH " class="form-control">
                                            <span> <button class="btn btn-outline-primary h-100" type="submit"> Search </button></span>
                                        </form>
                                    </div>
                                    <!-- <div class="col-md-4 mb-3">CATEGORY LIST
                                        <select class="form-select col-md-4" name="cate_id" >
                                            <option >Category List</option>  
                                            @foreach($category as $item) 
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach                                                                             
                                        </select>
                                    </div> -->
                                    <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Category List
                                            </button>
                                                <ul class="dropdown-menu">
                                                    @foreach($category as $item)                                                     
                                                        <li class="dropdown-item" value="{{$item->id}}">{{$item->name}}</li>
                                                    @endforeach                                                                                                              
                                                </ul>
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
                                        <th>Category</th>
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
                                        <td>
                                            {{$products['cat_name']}}
                                        </td>
                                        <td>{{ $products['price'] }}</td>                                   
                                    </tr>
                                    @endforeach                                    
                                </table>                            
                        </div>                
    </div> 
@endsection

