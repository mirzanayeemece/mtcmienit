{{-- header --}}
<div class="container-fluid" style="background-color: #145169;">
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          <div class="col-md-2 col-xs-3" style="padding-top: 5px; padding-bottom: 3px; ">

          <p id="demo" style="color: white"></p>

          <script>
          var d = new Date();
          document.getElementById("demo").innerHTML = d.toDateString();
          </script>

            <p style="color: #99c2ff; font-size: 25px; font-family: 'Times New Roman', Times, serif; ">
              &nbsp;&nbsp;
              <img src="../img/mtclogo.png" height="60px" width="60px">
              &nbsp;<b>{{ config('app.name', 'Laravel') }}</b>
            </p>

           </div>
           <div class="col-md-8 col-xs-6" style="padding-top: 15px;">
            <h4 style="text-align: center; color: white; ">ASPADA Paribesh Unnayan Foundation</h4>
            <h5 style="text-align: center; color: white; "><?php //echo $pr_name; ?>Microfinance for better Future</h5>
            <h6 style="text-align: center; color: white; "><?php //echo $org_address; ?>House:193(1st Floor), Road:1, New DOHS, Mohakhali, Dhaka-1206</h6>
           </div>
          <div class="col-md-2 col-xs-3" style="padding-right: 0; text-align: right; padding-top: 2px; ">
            {{-- <a href="../include/logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span>Log out</a> --}}
	          <a class="btn btn-primary" href="{{ route('logout') }}"
	            onclick="event.preventDefault();
	            document.getElementById('logout-form').submit();">
	            {{ __('Logout') }}
		      </a>
		      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		          @csrf
		      </form>
          </div>
      {{-- </div> --}}
    </div>
  </div>