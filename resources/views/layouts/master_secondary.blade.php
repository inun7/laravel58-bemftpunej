<!doctype html>
<html lang="en">

    @include('layouts.header')

    <body>
      
    @include('layouts.navbar_secondary')
    
    @yield('content')
    
    @include('layouts.footer')
    
    @yield('script')
    
    @yield('modal')
        
    </body>
    
</html>
