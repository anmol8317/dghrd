<!DOCTYPE html>
<html lang="en">

<head>
    @include('Dghrd.Admin.Layouts.Head')
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        {{-- <div id="loader"></div> --}}
    @include('Dghrd.Admin.Layouts.Header')
    @include('Dghrd.Admin.Layouts.Sidebar')
    @yield('content')
    <div class="control-sidebar-bg"></div>

    
    @include('Dghrd.Admin.Layouts.Footer')
   
</div>
</body>
</html>