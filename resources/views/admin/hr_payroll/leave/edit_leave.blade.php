@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><big><strong>EDIT LEAVE</strong></big></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{URL::to('/hr_payroll/leave/leaves')}}" class="btn btn-primary">Back</a>
                </div>
   
                @if (count($errors) > 0)
                  <div class="alert alert-danger" style="padding: 0 30px 0 30px;">
                   Upload Validation Error<br><br>
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                @if ($message = Session::get('success'))
                  <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                         <strong>{{ $message }}</strong>
                  </div>
                @endif

                <!---------------FORM--------------->
                <form class="" action="{{ url('/update_leave',$leave->id) }}" method="post" enctype="multipart/form-data" style="padding: 0 30px 0 30px;">
                  @csrf

                  <p class="alert-success" style="font-size: 20px; color: white; background:#149278; padding: 0 30px 0 30px;">
                  	@php
                      $message=Session::get('message');
                        if($message) {
                          echo $message;
                          Session::put('message',null);
                        }
                    @endphp
                          
                  </p>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-left">Leave Name:</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" value="{{$leave->name}}" id="name" name="name" required>
                    </div>
                </div>

                <div class="form-group row">
                      <label for="duration" class="col-md-4 col-form-label text-md-left">Duration:</label>
                      <div class="col-md-6">
                      <input type="text" class="form-control datepicker" value="{{$leave->duration}}" id="duration" name="duration" autocomplete="off" required>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="salary_grade_id" class="col-md-4 col-form-label text-md-left">Salary Grade:</label>
                  <div class="col-md-6">
                    <select id="salary_grade_id" name="salary_grade_id" class="form-control" required>
                      <option value>--Choose One--</option>
                      @foreach($salary_grade_info as $salary_grade)
                        <option value="{{ $salary_grade->id }}"
                          @if($salary_grade->id == $leave->salary_grade_id)
                            {{ 'Selected' }}
                          @endif
                          >{{ $salary_grade->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-left">Description:</label>
                    <div class="col-md-6">
                    <textarea type="text" class="form-control" id="description" name="description">{{$leave->other}}</textarea>
                  </div>
                </div>

                  <!-- Button -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-success" >Update</button>
                  </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection