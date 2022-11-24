<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>@yield('title')</title>        
    </head>
    <body>     

        <div class="card mx-auto m-2 col-lg-10 col-sm-12 col-md-12">
                <div class="card-header d-flex justify-content-center">
                    ZaaprDigital E-com
                </div>
                <div class="card-body d-flex justify-content-between">
                    <a href="{{route('addProduct')}}" class="btn btn-primary ">ADD PRODUCT</a>
                    <a href="{{url('/')}}" class="btn btn-primary">DASHBOARD</a>
                    <a href="{{route('addCategory')}}" class="btn btn-primary">ADD CATEGORY</a>
                </div>
        </div>
        <div class="container mx-auto" >
            <div class="card">
                @yield('content')
            </div>
            <div>
                @yield('main')
            </div>            
        </div>
    </body>
</html>