@extends('layouts.app')
@section('title', 'Add Category')

@section('content')
        <div class="card-body ">
            <form  enctype="multipart/form-data"  method="post" action="{{url('upload1')}}">
                @csrf
                <p class="card-header">
                    Add Category
                </p>
                    <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group ">
                                                <label class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="NAME" required>
                                                </div>                                               
                                            </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-12 col-form-label" >Parent Category <span class="text-danger">*</span></label>
                                            <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="Parentcategory" id="Parentcategory" placeholder="PARENTCATEGORY" >
                                            </div>                                            
                                        </div>
                            </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary mr-8 col-6" >Submit</button>
                    </div>
            </form>
        </div>        
@endsection

