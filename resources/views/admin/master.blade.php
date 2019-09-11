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
    <!-- FROM HERE added by FARHAN for testing -->
    <link href="{{asset('bs4')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/customnav.css" rel="stylesheet">
    <link href="{{asset('admin')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- added by FARHAN for testing TO HERE -->
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
    <!-- added by FARHAN from HERE -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- added by FARHAN to HERE -->

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

</body>
</html>

@yield('customscript')
