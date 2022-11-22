<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>@yield('title')</title>    
    </head>
    <body>
    
        <div>
            <div class="container " >
                <div class="row card d-flex m-4 ">            
                    <div class="col-sm-12 col-md-12 col-lg-12   ">  
                        <div class=" d-flex m-4  justify-content-between">
                            <a href="{{route('addProduct')}}"><button type="button" class="btn btn-primary "  > ADD PRODUCT</button></a>                
                            <a href="{{url('/')}}"><button type="button" class="btn btn-primary "  > DASHBOARD</button></a>                
                            <a href="{{route('addCategory')}}"><button type="button" class="btn btn-primary "  > ADD CATEGORY</button></a>                
                        </div>                      
                    </div>
                </div>
            </div> 
        </div>
        <div class="container mx-auto" >
            <div class="card">
                @yield('content')
            </div>
        </div>
    </body>
</html>