@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><big><strong>EDIT MEAL ITEM</strong></big></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{URL::to('/restaurant/meal_item/meal_items')}}" class="btn btn-primary">Back</a>
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
                <form class="" action="{{ url('/update_meal_item',$meal_item->id) }}" method="post" enctype="multipart/form-data" style="padding: 0 30px 0 30px;">
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

                  <!-- Name -->
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-left">Meal Item Name:</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" value="{{$meal_item->name}}" id="name" name="name" required>
                    </div>
                  </div>

                  <!-- Price -->
                  <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-left">Price:</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" value="{{$meal_item->price}}" id="price" name="price" required>
                    </div>
                  </div>

                  <!-- Type -->
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-left">Meal Type:</label>
                    <div class="col-md-6">
                      <select id="meal_type_id" name="meal_type_id" class="form-control" required>
                      <option value>--Choose One--</option>
                      @foreach($meal_item_type_info as $meal_type)
                        <option value="{{ $meal_type->id }}" 
                          @if($meal_item->meal_type_id == $meal_type->id)
                            {{ 'Selected' }}
                          @endif
                          >{{ $meal_type->name }}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-left">Description:</label>
                    <div class="col-md-6">
                      <textarea id="description" name="description" type="text" cols="80" rows="4" placeholder="" class="form-control">{{$meal_item->description}}</textarea>
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