@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Roles Permission Block</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="alert-success" style="font-size: 20px; color: white; background:#149278; padding: 0 30px 0 30px;">
                    @php
                      $message=Session::get('message');
                        if($message) {
                          echo $message;
                          Session::put('message',null);
                        }
                    @endphp
                    
                    </p>
                    <div class="col-md-6">
                        <h3>Role Wise Permissions</h3>
                        <ul id="tree1">
                            @foreach($roles as $role)
                                <li>
                                    {{ $role->name }}
                                    @if(count($role->childs))
                                        @include('admin.admin.role_wise_permission.manageChild',['childs' => $role->childs])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection