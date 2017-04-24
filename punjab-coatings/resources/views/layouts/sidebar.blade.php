<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="">

    <header class="">
        @include('includes.header')
    </header>

     <div class="col-sm-12">
          <h1>Products</h1>
        </div>

        <!-- sidebar content -->
        <qqdiv class="row">
            <div id="sidebar" class="col-md-3">
                @include('includes.sidebar')
             </div>

        <!-- main content -->
            <div id="content" class="col-md-9">
                @yield('content')
            </div> 
       </div>
       
    <footer  class="size">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>