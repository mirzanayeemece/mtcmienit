@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> <big> <strong>ADD NEW MENU</strong> </big> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{URL::to('/restaurant/menu/menus')}}" class="btn btn-primary">BACK</a>
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

              <!--form-->
              <form class="" action="{{ url('/save_menu') }}" method="post" enctype="multipart/form-data" style="padding: 0 30px 0 30px;">
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
                    <label for="name" class="col-md-3 col-form-label text-md-left font-weight-bold">Menu Name:</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-3 col-form-label text-md-left font-weight-bold">Menu Price:</label>
                    <div class="col-md-8">
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="menu_type_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Menu Type:</label>
                  <div class="col-md-8">
                    <select id="menu_type_id" name="menu_type_id" class="form-control" required>
                      <option value>--Choose One--</option>
                      @foreach($menu_type_info as $menu_type)
                        <option value="{{ $menu_type->id }}">{{ $menu_type->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="item_1_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 1 Name:</label>
                    <div class="col-md-3">
                      <select id="item_1_id" name="item_1_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_1_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 1 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_1_quantity" name="item_1_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_2_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 2 Name:</label>
                    <div class="col-md-3">
                      <select id="item_2_id" name="item_2_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_2_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 2 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_2_quantity" name="item_2_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_3_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 3 Name:</label>
                    <div class="col-md-3">
                      <select id="item_3_id" name="item_3_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_3_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 3 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_3_quantity" name="item_3_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_4_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 4 Name:</label>
                    <div class="col-md-3">
                      <select id="item_4_id" name="item_4_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_4_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 4 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_4_quantity" name="item_4_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_5_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 5 Name:</label>
                    <div class="col-md-3">
                      <select id="item_5_id" name="item_5_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_5_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 5 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_5_quantity" name="item_5_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_6_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 6 Name:</label>
                    <div class="col-md-3">
                      <select id="item_6_id" name="item_6_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_6_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 6 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_6_quantity" name="item_6_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_7_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 7 Name:</label>
                    <div class="col-md-3">
                      <select id="item_7_id" name="item_7_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_7_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 7 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_7_quantity" name="item_7_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_8_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 8 Name:</label>
                    <div class="col-md-3">
                      <select id="item_8_id" name="item_8_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_8_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 8 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_8_quantity" name="item_8_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_9_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 9 Name:</label>
                    <div class="col-md-3">
                      <select id="item_9_id" name="item_9_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_9_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 9 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_9_quantity" name="item_9_quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="item_10_id" class="col-md-3 col-form-label text-md-left font-weight-bold">Item 10 Name:</label>
                    <div class="col-md-3">
                      <select id="item_10_id" name="item_10_id" class="form-control">
                      <option value>--Choose One--</option>
                      @foreach($meal_item_info as $meal_item)
                        <option value="{{ $meal_item->id }}">{{ $meal_item->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label for="item_10_quantity" class="col-md-3 col-form-label text-md-right font-weight-bold">Item 10 Quantity:</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="item_10_quantity" name="item_10_quantity">
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success" >ADD</button>
                    <button type="reset" class="btn btn-danger" >RESET</button>
                </div>

              </form>

            </div>
        </div>
    </div>
</div>
@endsection