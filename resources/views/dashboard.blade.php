@extends('layouts.app')
@section('title', 'Dashboard')

<style>
    .list {
                border-top: 3px solid #47b2e4;
                border-bottom: 3px solid #47b2e4;
                padding: 30px;
                background: #fff;
                width: 100%;
                box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
            }
    
</style>  

@section('main')    
    <div class="card">
        <div class=" m-2 mx-auto mb-3 col-lg-12 col-sm-12 col-md-12">
                    <div class="card-header">
                        Products
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <form  action="{{route('searchProduct')}}" class="d-flex gap-1">
                            <input type="text" id="search" name="q" placeholder="SEARCH " class="form-control">
                            <span> <button class="btn btn-outline-primary h-100" type="submit"> Search </button></span>
                        </form>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category List
                            </button>
                            <ul class="dropdown-menu">
                                @foreach($category as $item)                                                     
                                    <a href="{{url('view-category', $item->id)}}"><li class="dropdown-item">{{$item->name}}</li></a>
                                @endforeach                                                                                                              
                            </ul>
                        </div>
                    </div>
        </div>
        <div class=" card-body  ">   
            <div class="row justify-content-center ">
                @foreach($products as $products) 
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
                    <div class="info pr-0 pl-0 list mb-2"> 
                        <a href="{{ asset('assets/product/' . $products->file) }}" target="_blank">
                        <img src="{{ asset('assets/product/' . $products->file) }}" width="250px" height="250px"  alt=""></a><br>
                            <div class="pt-4 ">
                            <strong>{{$products->name}} </strong><br>                    
                            Price :{{ $products['price'] }}<br>
                            Descrption :{{ $products['description'] }}</div>
                            <!-- {{$products['cat_name']}}    -->
                    </div>  
                    </div>
                @endforeach  
             </div>                        
                                                        
        </div>                                        
    </div>

    
    

    
@endsection

