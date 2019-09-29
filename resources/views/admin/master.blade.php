<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="{{asset('bs4')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('bs4')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('bs4')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/customnav.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/dash.css" rel="stylesheet">

    <!-- treeview start -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="{{asset('css')}}/treeview.css" rel="stylesheet">
    <!-- treeview end -->

   </head>

   <body>
    <div id="app">

      @include('admin.inc.header')
      @include('admin.inc.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- jQuery -->
    <script src="{{asset('bs4')}}/js/jquery.js"></script>
    <script src="{{asset('bs4')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('bs4')}}/js/bootstrap.js"></script>

    @yield('datatable')
    <!-- bootbox -->   
    <script type="text/javascript" src="{{asset('admin')}}/dist/js/bootbox.min.js"></script>
    <script type="text/javascript">

        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Do you want to delete it?", function(confirmed){
                if(confirmed) {
                    window.location.href = link;
                };
            });
        });
    </script>
    <!-- datepicker -->   
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript">
      $(function()
        {
          $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
          });
        });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('.navbar-dark .dmenu').hover(function () {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
    </script>
    <!-- treeview start -->
    <script src="{{asset('js')}}/treeview.js"></script>
    <!-- treeview end -->
</body>
</html>

@yield('customscript')
