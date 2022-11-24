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
                            <select class="form-select" name="cate_id"  aria-label="Default select example">
                                <option value="">Select a Category <span class="text-danger">*</span></option> 
                                @foreach($category as $item) 
                                    <option value="{{$item->id}}" >{{$item->name}}</option>                                
                                @endforeach  
                            </select>
                            @if ($errors->has('cate_id'))
                                <span class="text-danger">{{ $errors->first('cate_id') }}</span>
                            @endif
                        </div>
                            <div class="col">
                                            <div class="form-group">
                                                <label class="col-sm-3 col-form-label">Name <span class="text-danger">*</span> </label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name"
                                                        class="form-control" value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                </div>
                                            </div>
                            </div>
                            <div class="col">
                                        <div class="form-group ">
                                            <label class="col-sm-3 col-form-label" for="Price">Price <span class="text-danger">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="price" id="price"  value="{{ old('price') }}" placeholder="Price" >
                                                @if ($errors->has('price'))
                                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                                @endif
                                            </div>
                                        </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col">
                                            <div class="form-group ">
                                                <label class="col-sm-3 col-form-label">Image <span class="text-danger">*</span></label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="file" id="file" class="form-control"  >
                                                </div>
                                                @if ($errors->has('file'))
                                                    <span class="text-danger">{{ $errors->first('file') }}</span>
                                                @endif
                                            </div>
                            </div>

                            <div class="col">
                                        <div class="form-group col-6">
                                            <label class="col-sm-4 col-form-label" for="Description" >Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control"  name="description" rows="10" placeholder="Description" ></textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                            </div>
                    </div>

                    <div class="row d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-primary mr-8 col-6">Submit</button>
                    </div>

            </form>
        </div>
@endsection