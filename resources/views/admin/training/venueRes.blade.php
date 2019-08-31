@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Venue Reservation List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{URL::to('/training/addvenueRes')}}" class="btn btn-primary">Add New</a>
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

    <table id="venueres" class="table table-bordered">
    <thead>
        <tr>
            <th class="">#</th>
            <th class="">Name of Person / Organizaion</th>
            <th class="">Contact Number</th>
            <th class="w-25">Date / Start Date</th>
            <th class="w-25">End Date</th>
            <th class="">Venue</th>
            <th class="">No of Attendee</th>
            <th class="">Status</th>
            <th class="">Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($allvenueresinfo as $row) 
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
            <td>{{$row->venueName}}</td>
            <td>{{$row->no_of_attendee}}</td>
            <td>
                @if($row->status == '1')
                  {{Config::get('constants.venueResStatus.1')}}
                @elseif($row->status == '2')
                  {{Config::get('constants.venueResStatus.2')}}
                @elseif($row->status == '3')
                  {{Config::get('constants.venueResStatus.3')}}
                @endif
            </td>
            <td width="15%" align="right">
              <a href="{{URL::to('edit_venueres/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
              <a href="{{URL::to('delete_venueres/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
        $('#venueres').DataTable();
    } );
</script>

@endsection