
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.header')
<div class="container-fluid">
    <div class="row"> 
        @include('includes.sidebar')
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('content')
         </main>
    </div>
</div> 
    @include('includes.footer')
</body>
</html>
