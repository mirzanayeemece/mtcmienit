<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mtchome');
});

//Auth::routes();

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
//training center
include('traningcenter.php');

//user
Route::get('/admin/user/user', 'AdminController@user')->name('User');
Route::get('/admin/user/adduser', 'AdminController@adduser')->name('Add User');
Route::post('/saveuser','AdminController@saveuser');
Route::get('/delete_user/{id}','AdminController@delete_user');
Route::get('/edit_user/{id}','AdminController@edit_user')->name('Edit User');
Route::post('/update_user/{id}','AdminController@update_user');

//user-role
Route::get('/admin/user_role/userrole', 'AdminController@userrole')->name('User Role');
Route::get('/admin/user_role/adduserrole', 'AdminController@addrole')->name('Add User Role');
Route::post('/saverole','AdminController@saverole');
Route::get('/delete_user_role/{id}','AdminController@delete_user_role');
Route::get('/edit_user_role/{id}','AdminController@edit_user_role')->name('Edit User Role');
Route::post('/update_user_role/{id}','AdminController@update_user_role');

//role-wise-permission
Route::get('/admin/role_wise_permission/rolewisepermission', 'AdminController@role_wise_permission')->name('Role Wise Permission');

//change-password
Route::get('/admin/change_password/changepassword', 'AdminController@change_password')->name('Change Password');


//------HOTEL-MANAGEMENT-START-------//

//BUILDING
Route::get('/hotel_management/building/building_list', 'HotelController@building')->name('Buildings');
Route::get('/hotel_management/building/addbuilding', 'HotelController@add_building')->name('Add Building');
Route::get('/hotel_management/building/building_type_list', 'HotelController@building_type')->name('Building Types');
Route::get('/hotel_management/building/addbuildingtype', 'HotelController@add_building_type')->name('Add Building Type');
Route::post('/savebuilding','HotelController@save_building');
Route::post('/savebuildingtype','HotelController@save_building_type');
Route::get('/editbuilding/{id}','HotelController@edit_building')->name('Edit Building');
Route::post('/updatebuilding/{id}','HotelController@update_building');
Route::get('/deletebuilding/{id}','HotelController@delete_building');
Route::get('/editbuildingtype/{id}','HotelController@edit_building_type')->name('Edit Building Type');
Route::post('/updatebuildingtype/{id}','HotelController@update_building_type');
Route::get('/deletebuildingtype/{id}','HotelController@delete_building_type');

//FLOOR
Route::get('/hotel_management/floor/floor_list', 'HotelController@floor')->name('Floors');
Route::get('/hotel_management/floor/addfloor', 'HotelController@add_floor')->name('Add Floor');
Route::get('/hotel_management/floor/floor_type_list', 'HotelController@floor_type')->name('Floor Types');
Route::get('/hotel_management/floor/addfloortype', 'HotelController@add_floor_type')->name('Add Floor Type');
Route::post('/savefloor','HotelController@save_floor');
Route::post('/savefloortype','HotelController@save_floor_type');
Route::get('/editfloortype/{id}','HotelController@edit_floor_type')->name('Edit Floor Type');
Route::post('/updatefloortype/{id}','HotelController@update_floor_type');
Route::get('/deletefloortype/{id}','HotelController@delete_floor_type');
Route::get('/editfloor/{id}','HotelController@edit_floor')->name('Edit Floor');
Route::post('/updatefloor/{id}','HotelController@update_floor');
Route::get('/deletefloor/{id}','HotelController@delete_floor');

//ROOM
Route::get('/hotel_management/room/room_category_list', 'HotelController@room_category')->name('Room Categories');
Route::get('/hotel_management/room/addroomcategory', 'HotelController@add_room_category')->name('Add Room Category');
Route::get('/hotel_management/room/room_list', 'HotelController@room')->name('Rooms');
Route::get('/hotel_management/room/addroom', 'HotelController@add_room')->name('Add Room');
Route::post('/saveroom','HotelController@save_room');
Route::post('/saveroomcategory','HotelController@save_room_category');
Route::get('/editroomcategory/{id}','HotelController@edit_room_category')->name('Edit Room Category');
Route::post('/updateroomcategory/{id}','HotelController@update_room_category');
Route::get('/deleteroomcategory/{id}','HotelController@delete_room_category');
Route::get('/editroom/{id}','HotelController@edit_room')->name('Edit Room');
Route::post('/updateroom/{id}','HotelController@update_room');
Route::get('/deleteroom/{id}','HotelController@delete_room');

//RESERVATION
Route::get('/hotel_management/reservation/room_reservation_list', 'HotelController@room_reservation')->name('Room Reservations');
Route::get('/hotel_management/reservation/addreservation', 'HotelController@add_reservation')->name('Add Room Reservation');
Route::post('/savereservation','HotelController@save_reservation');
Route::get('/viewreservation/{id}','HotelController@view_reservation')->name('View Room Reservation');
Route::get('/editreservation/{id}','HotelController@edit_reservation')->name('Edit Room Reservation');
Route::post('/updatereservation/{id}','HotelController@update_reservation');
Route::get('/deletereservation/{id}','HotelController@delete_reservation');
Route::get('/makebooking/{id}','HotelController@make_booking');
Route::post('/savemakebooking','HotelController@save_make_booking');

//BOOKING
Route::get('/hotel_management/booking/booking_list', 'HotelController@room_booking')->name('Room Bookings');
Route::get('/hotel_management/booking/addbooking', 'HotelController@add_booking')->name('Add Room Booking');
Route::post('/savebooking','HotelController@save_booking');
Route::get('/makebilling/{id}', 'HotelController@make_billing')->name('Make Room Bill');
Route::get('/viewbooking/{id}','HotelController@view_booking')->name('View Room Booking');
Route::get('/editbooking/{id}','HotelController@edit_booking')->name('Edit Room Booking');
Route::post('/updatebooking/{id}','HotelController@update_booking');
Route::get('/deletebooking/{id}','HotelController@delete_booking');

//BILLING
Route::get('/hotel_management/billing/billing_list', 'HotelController@room_billing')->name('Room Billings');
Route::post('/savebilling','HotelController@save_billing');
Route::get('/viewbilling/{id}','HotelController@view_billing')->name('View Room Billing');
Route::get('/deletebilling/{id}','HotelController@delete_billing');

//------HOTEL-MANAGEMENT-END-------//


//------HR-AND-PAYROLL START-------//

//DEPARTMENT
Route::get('/hr_payroll/department/departments', 'HRandPayrollController@department')->name('Departments');
Route::get('/hr_payroll/department/add_department', 'HRandPayrollController@add_department')->name('Add Department');
Route::post('/save_department','HRandPayrollController@save_department');
Route::get('/edit_department/{id}','HRandPayrollController@edit_department')->name('Edit Department');
Route::post('/update_department/{id}','HRandPayrollController@update_department');
Route::get('/delete_department/{id}','HRandPayrollController@delete_department');

//EMPLOYEE-DESIGNATION
Route::get('/hr_payroll/employee_designation/employee_designations', 'HRandPayrollController@employee_designation')->name('Employee Designations');
Route::get('/hr_payroll/employee_designation/add_employee_designation', 'HRandPayrollController@add_employee_designation')->name('Add Employee Designation');
Route::post('/save_employee_designation','HRandPayrollController@save_employee_designation');
Route::get('/edit_employee_designation/{id}','HRandPayrollController@edit_employee_designation')->name('Edit Employee Designation');
Route::post('/update_employee_designation/{id}','HRandPayrollController@update_employee_designation');
Route::get('/delete_employee_designation/{id}','HRandPayrollController@delete_employee_designation');

//SALARY-GRADE
Route::get('/hr_payroll/salary_grade/salary_grades', 'HRandPayrollController@salary_grade')->name('Departments');
Route::get('/hr_payroll/salary_grade/add_salary_grade', 'HRandPayrollController@add_salary_grade')->name('Add SALARY-GRADE');
Route::post('/save_salary_grade','HRandPayrollController@save_salary_grade');
Route::get('/edit_salary_grade/{id}','HRandPayrollController@edit_salary_grade')->name('Edit SALARY-GRADE');
Route::post('/update_salary_grade/{id}','HRandPayrollController@update_salary_grade');
Route::get('/delete_salary_grade/{id}','HRandPayrollController@delete_salary_grade');

//LEAVE
Route::get('/hr_payroll/leave/leaves', 'HRandPayrollController@leave')->name('Leaves');
Route::get('/hr_payroll/leave/add_leave', 'HRandPayrollController@add_leave')->name('Add Leave');
Route::get('/hr_payroll/leave/leave_categories', 'HRandPayrollController@leave_category')->name('Leaves Categories');
Route::get('/hr_payroll/leave/add_leave_category', 'HRandPayrollController@add_leave_category')->name('Add Leave Category');
Route::post('/save_leave','HRandPayrollController@save_leave');
Route::post('/save_leave_category','HRandPayrollController@save_leave_category');
Route::get('/edit_leave/{id}','HRandPayrollController@edit_leave')->name('Edit Leave');
Route::post('/update_leave/{id}','HRandPayrollController@update_leave');
Route::get('/delete_leave/{id}','HRandPayrollController@delete_leave');
Route::get('/edit_leave_category/{id}','HRandPayrollController@edit_leave_category')->name('Edit Leave Category');
Route::post('/update_leave_category/{id}','HRandPayrollController@update_leave_category');
Route::get('/delete_leave_category/{id}','HRandPayrollController@delete_leave_category');

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
//EMPLOYEE
Route::get('/hr_payroll/employee/employees', 'HRandPayrollController@employee')->name('Employees');
Route::get('/hr_payroll/employee/add_employee', 'HRandPayrollController@add_employee')->name('Add Employee');
Route::post('/save_employee','HRandPayrollController@save_employee');
Route::get('/edit_employee/{id}','HRandPayrollController@edit_employee')->name('Edit Employee');
Route::post('/update_employee/{id}','HRandPayrollController@update_employee');
Route::get('/delete_employee/{id}','HRandPayrollController@delete_employee');

//------HR-AND-PAYROLL END-------//


//------RESTAURANT START-------//

//SUPPLIER
Route::get('/restaurant/supplier/suppliers', 'RestaurantController@supplier')->name('Suppliers');
Route::get('/restaurant/supplier/add_supplier', 'RestaurantController@add_supplier')->name('Add Supplier');
Route::post('/save_supplier','RestaurantController@save_supplier');
Route::get('/edit_supplier/{id}','RestaurantController@edit_supplier')->name('Edit Supplier');
Route::post('/update_supplier/{id}','RestaurantController@update_supplier');
Route::get('/delete_supplier/{id}','RestaurantController@delete_supplier');


//RECEIVER
Route::get('/restaurant/receiver/receivers', 'RestaurantController@receiver')->name('Receivers');
Route::get('/restaurant/receiver/add_receiver', 'RestaurantController@add_receiver')->name('Add Receiver');
Route::post('/save_receiver','RestaurantController@save_receiver');
Route::get('/edit_receiver/{id}','RestaurantController@edit_receiver')->name('Edit Receiver');
Route::post('/update_receiver/{id}','RestaurantController@update_receiver');
Route::get('/delete_receiver/{id}','RestaurantController@delete_receiver');


//GROCERY-CATEGORY
Route::get('/restaurant/grocery_category/grocery_categories', 'RestaurantController@grocery_category')->name('Grocery Categories');
Route::get('/restaurant/grocery_category/add_grocery_category', 'RestaurantController@add_grocery_category')->name('Add Grocery Category');
Route::post('/save_grocery_category','RestaurantController@save_grocery_category');
Route::get('/edit_grocery_category/{id}','RestaurantController@edit_grocery_category')->name('Edit Grocery Category');
Route::post('/update_grocery_category/{id}','RestaurantController@update_grocery_category');
Route::get('/delete_grocery_category/{id}','RestaurantController@delete_grocery_category');


//GROCERY
Route::get('/restaurant/grocery/groceries', 'RestaurantController@grocery')->name('Groceries');
Route::get('/restaurant/grocery/add_grocery', 'RestaurantController@add_grocery')->name('Add Grocery');
Route::post('/save_grocery','RestaurantController@save_grocery');
Route::get('/edit_grocery/{id}','RestaurantController@edit_grocery')->name('Edit Grocery');
Route::post('/update_grocery/{id}','RestaurantController@update_grocery');
Route::get('/delete_grocery/{id}','RestaurantController@delete_grocery');


//MEAL-ITEM
Route::get('/restaurant/meal_item/meal_items', 'RestaurantController@meal_item')->name('Meal Items');
Route::get('/restaurant/meal_item/add_meal_item', 'RestaurantController@add_meal_item')->name('Add Meal Iten');
Route::post('/save_meal_item','RestaurantController@save_meal_item');
Route::get('/edit_meal_item/{id}','RestaurantController@edit_meal_item')->name('Edit Meal Item');
Route::post('/update_meal_item/{id}','RestaurantController@update_meal_item');
Route::get('/delete_meal_item/{id}','RestaurantController@delete_meal_item');


//MEAL-ITEM-TYPE
Route::get('/restaurant/meal_item_type/meal_item_types', 'RestaurantController@meal_item_type')->name('Meal Types');
Route::get('/restaurant/meal_item_type/add_meal_item_type', 'RestaurantController@add_meal_item_type')->name('Add Meal Type');
Route::post('/save_meal_item_type','RestaurantController@save_meal_item_type');
Route::get('/edit_meal_item_type/{id}','RestaurantController@edit_meal_item_type')->name('Edit Meal Type');
Route::post('/update_meal_item_type/{id}','RestaurantController@update_meal_item_type');
Route::get('/delete_meal_item_type/{id}','RestaurantController@delete_meal_item_type');


//MENU
Route::get('/restaurant/menu/menus', 'RestaurantController@menu')->name('Menus');
Route::get('/restaurant/menu/add_menu', 'RestaurantController@add_menu')->name('Add Menu');
Route::post('/save_menu','RestaurantController@save_menu');
Route::get('/edit_menu/{id}','RestaurantController@edit_menu')->name('Edit Menu');
Route::post('/update_menu/{id}','RestaurantController@update_menu');
Route::get('/delete_menu/{id}','RestaurantController@delete_menu');


//MENU-TYPE
Route::get('/restaurant/menu_type/menu_types', 'RestaurantController@menu_type')->name('Menu Types');
Route::get('/restaurant/menu_type/add_menu_type', 'RestaurantController@add_menu_type')->name('Add Menu Type');
Route::post('/save_menu_type','RestaurantController@save_menu_type');
Route::get('/edit_menu_type/{id}','RestaurantController@edit_menu_type')->name('Edit Menu Type');
Route::post('/update_menu_type/{id}','RestaurantController@update_menu_type');
Route::get('/delete_menu_type/{id}','RestaurantController@delete_menu_type');


//PURCHASE
Route::get('/restaurant/purchase/purchases', 'RestaurantController@purchase')->name('Purchases');
Route::get('/restaurant/purchase/add_purchase', 'RestaurantController@add_purchase')->name('Add Purchase');
Route::post('/save_purchase','RestaurantController@save_purchase');
Route::get('/edit_purchase/{id}','RestaurantController@edit_purchase')->name('Edit Purchase');
Route::post('/update_purchase/{id}','RestaurantController@update_purchase');
Route::get('/delete_purchase/{id}','RestaurantController@delete_purchase');


//------RESTAURANT END-------//

//------HR-AND-PAYROLL END-------//

