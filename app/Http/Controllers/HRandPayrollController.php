<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use DB;
use PDF;
use Auth;
use Session;
use Exception;
Session_start();

class HRandPayrollController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    //------- METHODS FOR DEPARTMENT --------//
    //DEPARTMENT
    public function department(){
        $department_info=DB::table('departments')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_departments=view('admin.hr_payroll.department.departments')
                         ->with('department_info',$department_info);
        return view('admin.master')
                         ->with('admin.hr_payroll.department.departments',$manage_departments);
    }
    //ADD-DEPARTMENT
    public function add_department(){
        return view('admin.hr_payroll.department.add_department');
    }
    //SAVE DEPARTMENT TO DATABASE
    public function save_department(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100','unique:departments'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        
        DB::table('departments')->insert($data);
        Session::put('message','Department is Added Successfully');
        return Redirect::to('/hr_payroll/department/add_department');
    }
    //EDIT DEPARTMENT
    public function edit_department($id)
    {
        $department=DB::table('departments')
                           ->where('id',$id)
                           ->first();
        $manage_department=view('admin.hr_payroll.department.edit_department')
                         ->with('department',$department);
        return view('admin.master')
                         ->with('admin.hr_payroll.department.edit_department',$manage_department);
    }
    //UPDATE DEPARTMENT
    public function update_department(Request $request, $id)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100'],
          'description'  => ['max:255']
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        DB::table('departments')
             ->where('id',$id)
             ->update($data);
        Session::put('message','Department has been updated Successfully');
        return Redirect::to('/hr_payroll/department/departments');
    }
    //DELETE DEPARTMENT FROM DATABASE
    public function delete_department($id)
    {
        DB::table('departments')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'Department has been deleted Successfully');
        return Redirect::to('/hr_payroll/department/departments');
    }


    //------- METHODS FOR EMPLOYEE-DESIGNATION --------//
    //EMPLOYEE-DESIGNATION
    public function employee_designation(){
        $employee_designation_info=DB::table('employee_designations')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_employee_designations=view('admin.hr_payroll.employee_designation.employee_designations')
                         ->with('employee_designation_info',$employee_designation_info);
        return view('admin.master')
                         ->with('admin.hr_payroll.employee_designation.employee_designations',$manage_employee_designations);
    }
    //ADD-EMPLOYEE-DESIGNATION
    public function add_employee_designation(){
        return view('admin.hr_payroll.employee_designation.add_employee_designation');
    }
    //SAVE EMPLOYEE-DESIGNATION TO DATABASE
    public function save_employee_designation(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100','unique:employee_designations'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        
        DB::table('employee_designations')->insert($data);
        Session::put('message','Employee Designation is Added Successfully');
        return Redirect::to('/hr_payroll/employee_designation/add_employee_designation');
    }
    //EDIT EMPLOYEE-DESIGNATION
    public function edit_employee_designation($id)
    {
        $employee_designation=DB::table('employee_designations')
                           ->where('id',$id)
                           ->first();
        $manage_employee_designation=view('admin.hr_payroll.employee_designation.edit_employee_designation')
                         ->with('employee_designation',$employee_designation);
        return view('admin.master')
                         ->with('admin.hr_payroll.employee_designation.edit_employee_designation',$manage_employee_designation);
    }
    //UPDATE EMPLOYEE-DESIGNATION
    public function update_employee_designation(Request $request, $id)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100'],
          'description'  => ['max:255']
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        DB::table('employee_designations')
             ->where('id',$id)
             ->update($data);
        Session::put('message','Employee Designation has been updated Successfully');
        return Redirect::to('/hr_payroll/employee_designation/employee_designations');
    }
    //DELETE EMPLOYEE-DESIGNATION FROM DATABASE
    public function delete_employee_designation($id)
    {
        DB::table('employee_designations')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'Employee Designation has been deleted Successfully');
        return Redirect::to('/hr_payroll/employee_designation/employee_designations');
    }


    //------- METHODS FOR SALARY-GRADE --------//
    //SALARY-GRADE
    public function salary_grade(){
        $salary_grade_info=DB::table('salary_grades')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_salary_grades=view('admin.hr_payroll.salary_grade.salary_grades')
                         ->with('salary_grade_info',$salary_grade_info);
        return view('admin.master')
                         ->with('admin.hr_payroll.salary_grade.salary_grades',$manage_salary_grades);
    }
    //ADD-SALARY-GRADE
    public function add_salary_grade(){
        return view('admin.hr_payroll.salary_grade.add_salary_grade');
    }
    //SAVE SALARY-GRADE TO DATABASE
    public function save_salary_grade(Request $request)
    {
        $this->validate($request, [
          'name'                        => ['required', 'string', 'max:100','unique:salary_grades'],
          'type'                        => ['required', 'integer'],
          'provident_fund'              => ['required', 'integer', 'min:0'],
          'basic_salary'                => ['required', 'integer', 'min:0'],
          'transportation_allowance'    => ['required', 'integer', 'min:0'],
          'dinning_allowance'           => ['required', 'integer', 'min:0'],
          'other_allowance'             => ['required', 'integer', 'min:0'],
          'home_rent'                   => ['required', 'integer', 'min:0'],
          'gross_salary'                => ['required', 'integer', 'min:0'],
          'note'                        => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['type'] = $request->type;
        $data['provident_fund'] = $request->provident_fund;
        $data['basic_salary'] = $request->basic_salary;
        $data['transportation_allowance'] = $request->transportation_allowance;
        $data['dinning_allowance'] = $request->dinning_allowance;
        $data['other_allowance'] = $request->other_allowance;
        $data['home_rent'] = $request->home_rent;
        $data['gross_salary'] = $request->gross_salary;
        $data['note'] = $request->note;
        $data['created_at'] = now();
        
        DB::table('salary_grades')->insert($data);
        Session::put('message','Salary Grade is Added Successfully');
        return Redirect::to('/hr_payroll/salary_grade/add_salary_grade');
    }
    //EDIT SALARY-GRADE
    public function edit_salary_grade($id)
    {
        $salary_grade=DB::table('salary_grades')
                           ->where('id',$id)
                           ->first();
        $manage_salary_grade=view('admin.hr_payroll.salary_grade.edit_salary_grade')
                         ->with('salary_grade',$salary_grade);
        return view('admin.master')
                         ->with('admin.hr_payroll.salary_grade.edit_salary_grade',$manage_salary_grade);
    }
    //UPDATE SALARY-GRADE
    public function update_salary_grade(Request $request, $id)
    {
        $this->validate($request, [
          'name'                        => ['required', 'string', 'max:100'],
          'type'                        => ['required', 'integer'],
          'provident_fund'              => ['required', 'integer', 'min:0'],
          'basic_salary'                => ['required', 'integer', 'min:0'],
          'transportation_allowance'    => ['required', 'integer', 'min:0'],
          'dinning_allowance'           => ['required', 'integer', 'min:0'],
          'other_allowance'             => ['required', 'integer', 'min:0'],
          'home_rent'                   => ['required', 'integer', 'min:0'],
          'gross_salary'                => ['required', 'integer', 'min:0'],
          'note'                        => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['type'] = $request->type;
        $data['provident_fund'] = $request->provident_fund;
        $data['basic_salary'] = $request->basic_salary;
        $data['transportation_allowance'] = $request->transportation_allowance;
        $data['dinning_allowance'] = $request->dinning_allowance;
        $data['other_allowance'] = $request->other_allowance;
        $data['home_rent'] = $request->home_rent;
        $data['gross_salary'] = $request->gross_salary;
        $data['note'] = $request->note;
        $data['created_at'] = now();

        DB::table('salary_grades')
             ->where('id',$id)
             ->update($data);
        Session::put('message','Salary Grade has been updated Successfully');
        return Redirect::to('/hr_payroll/salary_grade/salary_grades');
    }
    //DELETE SALARY-GRADE FROM DATABASE
    public function delete_salary_grade($id)
    {
        DB::table('salary_grades')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'Salary Grade has been deleted Successfully');
        return Redirect::to('/hr_payroll/salary_grade/salary_grades');
    }


//------- METHODS FOR LEAVE --------//
    //LEAVE
    public function leave(){
        $department_info=DB::table('departments')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_departments=view('admin.hr_payroll.department.departments')
                         ->with('department_info',$department_info);
        return view('admin.master')
                         ->with('admin.hr_payroll.department.departments',$manage_departments);
    }
    //ADD-LEAVE
    public function add_leave(){
        return view('admin.hr_payroll.department.add_department');
    }
    //SAVE LEAVE TO DATABASE
    public function save_leave(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100','unique:departments'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        
        DB::table('departments')->insert($data);
        Session::put('message','Department is Added Successfully');
        return Redirect::to('/hr_payroll/department/add_department');
    }
    //EDIT LEAVE
    public function edit_leave($id)
    {
        $department=DB::table('departments')
                           ->where('id',$id)
                           ->first();
        $manage_department=view('admin.hr_payroll.department.edit_department')
                         ->with('department',$department);
        return view('admin.master')
                         ->with('admin.hr_payroll.department.edit_department',$manage_department);
    }
    //UPDATE LEAVE
    public function update_leave(Request $request, $id)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100'],
          'description'  => ['max:255']
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        DB::table('departments')
             ->where('id',$id)
             ->update($data);
        Session::put('message','Department has been updated Successfully');
        return Redirect::to('/hr_payroll/department/departments');
    }
    //DELETE LEAVE FROM DATABASE
    public function delete_leave($id)
    {
        DB::table('departments')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'Department has been deleted Successfully');
        return Redirect::to('/hr_payroll/department/departments');
    }


    //------- METHODS FOR LEAVE-CATEGORY --------//
    //LEAVE-CATEGORY
    public function leave_category(){
        $leave_category_info=DB::table('leave_categories')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_leave_category=view('admin.hr_payroll.leave.leave_categories')
                         ->with('leave_category_info',$leave_category_info);
        return view('admin.master')
                         ->with('admin.hr_payroll.leave.leave_categories',$manage_leave_category);
    }
    //ADD-LEAVE-CATEGORY
    public function add_leave_category(){
        return view('admin.hr_payroll.leave.add_leave_category');
    }
    //SAVE LEAVE-CATEGORY TO DATABASE
    public function save_leave_category(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100','unique:leave_categories'],
          'details'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['details'] = $request->details;
        $data['created_at'] = now();
        
        DB::table('leave_categories')->insert($data);
        Session::put('message','Leave Category is Added Successfully');
        return Redirect::to('/hr_payroll/leave/add_leave_category');
    }
    //EDIT LEAVE-CATEGORY
    public function edit_leave_category($id)
    {
        $department=DB::table('departments')
                           ->where('id',$id)
                           ->first();
        $manage_department=view('admin.hr_payroll.department.edit_department')
                         ->with('department',$department);
        return view('admin.master')
                         ->with('admin.hr_payroll.department.edit_department',$manage_department);
    }
    //UPDATE LEAVE-CATEGORY
    public function update_leave_category(Request $request, $id)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100'],
          'description'  => ['max:255']
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        DB::table('departments')
             ->where('id',$id)
             ->update($data);
        Session::put('message','Department has been updated Successfully');
        return Redirect::to('/hr_payroll/department/departments');
    }
    //DELETE LEAVE-CATEGORY FROM DATABASE
    public function delete_leave_category($id)
    {
        DB::table('departments')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'Department has been deleted Successfully');
        return Redirect::to('/hr_payroll/department/departments');
    }


}
