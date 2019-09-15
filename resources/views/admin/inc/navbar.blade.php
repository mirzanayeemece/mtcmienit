{{-- navbar --}}

<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="padding-right: 80px;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbar4">
  
  <ul class="navbar-nav nav-fill w-100">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
    </li>
    <li class="nav-item dropdown dmenu">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Admin
        </a>
        <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="{{URL::to('/admin/user/user')}}">User</a>
        <a class="dropdown-item" href="{{URL::to('/admin/user_role/userrole')}}">User Role</a>
        <!-- <a class="dropdown-item" href="{{URL::to('/admin/role_wise_permission/rolewisepermission')}}">Role Wise Permission</a> -->
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Role Wise Permission</a>
        <!-- <a class="dropdown-item" href="{{URL::to('/admin/change_password/changepassword')}}">Change Password</a> -->
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Change Password</a>
        </div>
      </li>
    <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Configuration
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Hotel</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Discount</a>
      </div>
    </li>
    <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Hotel Management
      </a>
      <div class="dropdown-menu sm-menu">
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
    <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        HR & Payroll
      </a>
      <div class="dropdown-menu sm-menu">
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
    <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Restaurant
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="{{URL::to('/restaurant/supplier/suppliers')}}">Suppliers</a>
        <a class="dropdown-item" href="{{URL::to('/restaurant/receiver/receivers')}}">Receivers</a>
        <a class="dropdown-item" href="{{URL::to('/restaurant/grocery_category/grocery_categories')}}">Grocery Category</a>
        <a class="dropdown-item" href="{{URL::to('/restaurant/grocery/groceries')}}">Grocery List</a>
        <!-- <a class="dropdown-item" href="{{URL::to('/restaurant/purchase/purchases')}}">Purchases</a> -->
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Purchases</a>
        <a class="dropdown-item" href="{{URL::to('/restaurant/meal_item/meal_items')}}">Meal Items</a>
        <a class="dropdown-item" href="{{URL::to('/restaurant/meal_item_type/meal_item_types')}}">Meal Types</a>
        <a class="dropdown-item" href="{{URL::to('/restaurant/menu/menus')}}">Menus</a>
        <a class="dropdown-item" href="{{URL::to('/restaurant/menu_type/menu_types')}}">Menu Types</a>
      </div>
    </li>
    <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Training Centre
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="{{URL::to('/training/venue')}}">Venue</a>
        <a class="dropdown-item" href="{{URL::to('/training/venueRes')}}">Venue Reservation</a>
      </div>
    </li><li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Inventory
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="{{URL::to('/inventory/inventory_supplier/inventory_suppliers')}}">Inv. Suppliers</a>
        <a class="dropdown-item" href="{{URL::to('/inventory/inventory_receiver/inventory_receivers')}}">Receivers</a>
        <a class="dropdown-item" href="{{URL::to('/inventory/inventory_category/inventory_categories')}}">Category</a>
        <a class="dropdown-item" href="{{URL::to('/inventory/inventory_item/inventory_items')}}">Inv List</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Purchase</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Repairing</a>
      </div>
    </li>
    <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Accounting
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Generate Voucher</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Balance Sheet</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Income Statement</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Cash Book</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Bank Book</a>
      </div>
    </li>
    <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Reports
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Inventory Reports</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Chart of Account Reports</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Daily Tansaction Reports</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Cash Book Reports</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Bank Book Reports</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Cash Flow Reports</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Balance Sheet</a>
        <a class="dropdown-item" href="{{URL::to('/maintenance')}}">Income Statement</a>
      </div>
    </li>
    {{-- <li class="nav-item dropdown dmenu">
      <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li> --}}
    
    {{-- <li class="nav-item">
      <a class="nav-link" href="https://lawmessengerbd.com:2096" target="_blank">Web Mail</a>
    </li> --}}
  </ul>

</div>

</nav>
{{-- Prev nav --}}
{{-- <nav class="navbar navbar-expand-sm navbar-dark">  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link" href="{{ url('/home') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashboard
                          </a>
                        </li>
                    </ul>

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
                            <a class="dropdown-item" href="">Department</a>
                            <a class="dropdown-item" href="">Employee Designation</a>
                            <a class="dropdown-item" href="">Employee</a>
                            <a class="dropdown-item" href="">Leave</a>
                            <a class="dropdown-item" href="">Increment</a>
                            <a class="dropdown-item" href="">Salary Grade</a>
                            <a class="dropdown-item" href="">Salary Payment</a>
                            <a class="dropdown-item" href="">Salary history</a>
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
            
</nav> --}}