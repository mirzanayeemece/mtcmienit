<<<<<<< Updated upstream
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
          <div class="col-md-2 col-xs-3" style="padding-right: 8px; text-align: right; padding-top: 2px; ">
            {{-- <a href="../include/logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span>Log out</a> --}}
	          <a class="btn btn-primary" href="{{ route('logout') }}"
	            onclick="event.preventDefault();
	            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
	            {{ __('Logout') }}
		      </a>
		      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		          @csrf
		      </form>
          </div>
      {{-- </div> --}}
    </div>
  </div>
=======
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{URL::to('/admin/user/user')}}">User</a>
                            <a class="dropdown-item" href="{{URL::to('/admin/user_role/userrole')}}">User Role</a>
                            <a class="dropdown-item" href="{{URL::to('/admin/role_wise_permission/rolewisepermission')}}">Role Wise Permission</a>
                            <a class="dropdown-item" href="{{URL::to('/admin/change_password/changepassword')}}">Change Password</a>
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Configuration
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Hotel</a>
                            <a class="dropdown-item" href="">Discount</a>
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hotel Management
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/room/room_list')}}">Rooms</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/room/room_category_list')}}">Room Category</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/reservation/room_reservation_list')}}">Reservation</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/booking/booking_list')}}">Booking</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/billing/billing_list')}}">Billing</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/floor/floor_list')}}">Floors</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/floor/floor_type_list')}}">Floor Types</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/building/building_list')}}">Buildings</a>
                            <a class="dropdown-item" href="{{URL::to('/hotel_management/building/building_type_list')}}">Building Types</a>
                            
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HR & Payroll
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/department/departments')}}">Department</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/employee_designation/employee_designations')}}">Employee Designation</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/employee/employees')}}">Employee</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/leave/leaves')}}">Leave</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/leave/leave_categories')}}">Leave Category</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/increment/increments')}}">Increment</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/salary_grade/salary_grades')}}">Salary Grade</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/salary_payment/salary_payments')}}">Salary Payment</a>
                            <a class="dropdown-item" href="{{URL::to('/hr_payroll/salary_history/salary_histories')}}">Salary history</a>
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Restaurant
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Suppliers</a>
                            <a class="dropdown-item" href="">Receivers</a>
                            <a class="dropdown-item" href="">Grossery Category</a>
                            <a class="dropdown-item" href="">Grossery List</a>
                            <a class="dropdown-item" href="">Purchase</a>
                            <a class="dropdown-item" href="">Meal</a>
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Training Centre
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{URL::to('/training/venue')}}">Venue</a>
                            <a class="dropdown-item" href="{{URL::to('/training/venueRes')}}">Venue Reservation</a>
                            {{-- <a class="dropdown-item" href="{{URL::to('/training/venueAlloc')}}">Venue Allocation</a> --}}
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inventory
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Inv. Suppliers</a>
                            <a class="dropdown-item" href="">Receivers</a>
                            <a class="dropdown-item" href="">Category</a>
                            <a class="dropdown-item" href="">Inv List</a>
                            <a class="dropdown-item" href="">Purchase</a>
                            <a class="dropdown-item" href="">Repairing</a>
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accounting
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Generate Voucher</a>
                            <a class="dropdown-item" href="">Balance Sheet</a>
                            <a class="dropdown-item" href="">Income Statement</a>
                            <a class="dropdown-item" href="">Cash Book</a>
                            <a class="dropdown-item" href="">Bank Book</a>
                          </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reports
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Inventory Reports</a>
                          </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
>>>>>>> Stashed changes
