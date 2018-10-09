<!doctype html>
 <html class="no-js" lang=""> 
<head>
   
@include('admin.includes.head')

</head>
<body>


        <!-- Left Panel -->

      @include('admin.includes.left-nav')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('admin.includes.header')
        <!-- Header-->

       
            
       @yield('content')


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    

</body>
</html>
