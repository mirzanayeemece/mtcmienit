@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><big> <strong>ROOM RESERVATIONS LIST</strong> </big></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{URL::to('/hotel_management/reservation/addroomreservation')}}" class="btn btn-primary">Add New Room Reservation</a>
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

                <table id="room" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="">#</th>
                            <th class="">Name of Person / Organizaion</th>
                            <th class="">Contact Number</th>
                            <th class="w-25">Date / Start Date</th>
                            <th class="w-25">End Date</th>
                            <th class="">Room</th>
                            <th class="">No of Attendee</th>            
                            <th class="">Status</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($room_reservation_info as $row) 
                        <tr>
                            <td width="5%">{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->contact_no}}</td>
                            <td>{{date("d-m-Y", strtotime($row->start_date))}}</td>
                            <td>
                                @if($row->end_date != NULL)
                                  {{date("d-m-Y", strtotime($row->end_date))}}
                                @else
                                  {{'Reserved for One Day'}}
                                @endif
                            </td>
                            <td>{{$row->room_no}}</td>
                            <td>{{$row->no_of_attendee}}</td>            
                            <td>
                                @if($row->status == '1')
                                  {{Config::get('constants.roomResStatus.1')}}
                                @elseif($row->status == '2')
                                  {{Config::get('constants.roomResStatus.2')}}
                                @endif
                            </td>
                            <td width="15%" align="right">
                              <a href="{{URL::to('view_room_res/'.$row->id)}}" class="" title="View"><img src="{{asset('img')}}/view.gif" alt="view" height="20px" width="20px"></a>
                              <a href="{{URL::to('edit_room_res/'.$row->id)}}" class="" title="Edit"><img src="{{asset('img')}}/edit.gif" alt="edit" height="20px" width="20px"></a>
                              <a href="{{URL::to('delete_room_res/'.$row->id)}}" class="" title="Delete" id="delete"><img src="{{asset('img')}}/delete.gif" alt="delete" height="20px" width="20px"></a>
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
        $('#room').DataTable({
            "paging": true,
            "ordering":  true,
            "pagingType": "full_numbers"
          });
    } );
</script>

@endsection