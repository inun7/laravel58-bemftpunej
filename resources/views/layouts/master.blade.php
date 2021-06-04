<!doctype html>
<html lang="en">

    @include('layouts.header')

    <body>
      
    @include('layouts.navbar')
    
    @yield('content')
    
    @include('layouts.footer')
    
    @yield('script')
    
    @yield('modal')
        
    </body>
    
</html>
