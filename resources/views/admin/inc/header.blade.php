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
                            <a class="dropdown-item" href="{{URL::to('/admin/userrole/userrole')}}">User Role</a>
                            <a class="dropdown-item" href="{{URL::to('/admin/rolewisepermission/rolewisepermission')}}">Role Wise Permission</a>
                            <a class="dropdown-item" href="{{URL::to('/admin/changepassword/changepassword')}}">Change Password</a>
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
                            <a class="dropdown-item" href="">Category</a>
                            <a class="dropdown-item" href="">Room</a>
                            <a class="dropdown-item" href="">Reservation</a>
                            <a class="dropdown-item" href="">Booking</a>
                            <a class="dropdown-item" href="">Billing</a>
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
                            <a class="dropdown-item" href="{{URL::to('/training/venueAlloc')}}">Venue Allocation</a>
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