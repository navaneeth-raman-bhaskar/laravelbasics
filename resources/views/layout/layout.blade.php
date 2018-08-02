<!doctype html>

<html>

<head>
<title>@yield('title')</title>
       @include('includes.head')

</head>

<body>

<div class="container">

       <header class="row">

               @include('includes.header')

           </header>

       <div id="main" class="row">

                   @yield('content')

           </div>
<div class="testing">
    @section('sidebar')
        This is the master sidebar.
    @endsection
    @yield('sidebar') {{--insted of @endsection @yield together we can use @show--}}
</div>
       <footer class="row">

               @include('includes.footer')

           </footer>

</div>

</body>

</html>