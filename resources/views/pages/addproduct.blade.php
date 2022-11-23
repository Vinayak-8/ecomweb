@extends('layouts.app')
@section('title', 'Add Product')

@section('content')
        <div class="card-body ">
            <form  enctype="multipart/form-data"  method="post" action="{{url('upload')}}">
                @csrf
                <p class="card-description">
                    Add Product
                </p>            
                    <div class="row">
                        <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id" aria-label="Default select example">
                            <option value="">Select a Category</option> 
                            @foreach($category as $item) 
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                        </div>
                            <div class="col">
                                            <div class="form-group">
                                                <label class="col-sm-3 col-form-label">Name <span class="text-danger">*</span> </label>
                                                <div class="col-sm-6">
                                                    <input type="text" value="{{ old('name') }}" required name="name"
                                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
                                                    @if ($errors->has('name'))
                                                        <span class="invalid feedback" role="alert">
                                                            <strong class="text-danger">{{ $errors->first('name') }}.</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                            </div>
                            <div class="col">
                                        <div class="form-group ">
                                            <label class="col-sm-3 col-form-label" for="Price">Price</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="price" id="price" placeholder="Price" required>
                                            </div>
                                        </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col">
                                            <div class="form-group ">
                                                <label class="col-sm-3 col-form-label">Image</label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="file" id="file" class="form-control">
                                                </div>
                                            </div>
                            </div>

                            <div class="col">
                                        <div class="form-group col-6">
                                            <label class="col-sm-4 col-form-label" for="Description" >Description</label>
                                            <textarea class="form-control" name="description" rows="10" placeholder="Description" required></textarea>
                                        </div>
                            </div>
                    </div>

                    <div class="row d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-primary mr-8 col-6">Submit</button>
                    </div>

            </form>
        </div>
@endsection