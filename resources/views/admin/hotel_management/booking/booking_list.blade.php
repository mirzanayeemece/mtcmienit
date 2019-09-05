@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><big> <strong>ROOM BOOKINGS LIST</strong> </big></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{URL::to('/hotel_management/booking/addbooking')}}" class="btn btn-primary">Add New Room Booking</a>
                </div>

                <p class="alert-success" style="font-size: 20px; color: white; background:#149278; padding: 0 30px 0 30px;">
                    @php
                      $message=Session::get('message');
                        if($message) {
                          echo $message;
                          Session::put('message',null);
                        }
                    @endphp
                </p>

                <table id="booking" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="">#</th>
                            <th class="">Guest Name</th>
                            <th class="">Contact Number</th>
                            <th class="w-25">Date / Start Date</th>
                            <th class="w-25">End Date</th>
                            <th class="">Room No</th>           
                            <th class="">Pay Status</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($booking_info as $row)
                        <tr>
                            <td width="5%">{{$row->id}}</td>
                            <td>{{$row->guest_name}}</td>
                            <td>{{$row->guest_contact}}</td>
                            <td>{{date("d-m-Y", strtotime($row->start_date))}}</td>
                            <td>
                                @if($row->end_date != NULL)
                                  {{date("d-m-Y", strtotime($row->end_date))}}
                                @else
                                  {{'Booked for One Day'}}
                                @endif
                            </td>
                            <td>
                                @foreach($room_info as $row_room)
                                    @if($row_room->id == $row->room_id)
                                        {{$row_room->room_no}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @if($row->status == '1')
                                  {{Config::get('constants.roomBookStatus.1')}}
                                @elseif($row->status == '2')
                                  {{Config::get('constants.roomBookStatus.2')}}
                                @elseif($row->status == '3')
                                  {{Config::get('constants.roomBookStatus.3')}}
                                @endif
                            </td>
                            <td width="15%" align="right">
                              <a href="{{URL::to('viewbooking/'.$row->id)}}" class="" title="View"><img src="{{asset('img')}}/view.gif" alt="view" height="20px" width="20px"></a>
                              <a href="{{URL::to('editbooking/'.$row->id)}}" class="" title="Edit"><img src="{{asset('img')}}/edit.gif" alt="edit" height="20px" width="20px"></a>
                              <a href="{{URL::to('deletebooking/'.$row->id)}}" class="" title="Delete" id="delete"><img src="{{asset('img')}}/delete.gif" alt="delete" height="20px" width="20px"></a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@section('datatable')
    
<!-- datatable -->
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#booking').DataTable({
            "paging": true,
            "ordering":  true,
            "pagingType": "full_numbers"
          });
    } );
</script>

@endsection