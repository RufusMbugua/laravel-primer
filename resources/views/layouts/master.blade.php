<html>
   <head>
        <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
       
   </head>

   <body>
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')
        <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
   </body>      
</html>