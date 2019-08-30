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
   </head>

   <body>
    <div id="app">

      @include('admin.inc.header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- jQuery -->
    <script src="{{asset('bs4')}}/js/jquery.js"></script>
    <script src="{{asset('bs4')}}/js/bootstrap.min.js"></script>

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

</body>
</html>
