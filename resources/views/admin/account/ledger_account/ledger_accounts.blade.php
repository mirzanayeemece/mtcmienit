@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Ledger Accounts</h3></div>

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

                    <div class="col-md-12">
                        
                            <table id="tree1" class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                    </tr>
                                </thead>

                                
                                      
                                      @foreach($account_head_types as $account_head_type)
                                      <tbody>
                                        <tr>
                                            <td>
                                                {{ $account_head_type->id }}
                                            </td>
                                            <td class="text-primary">
                                                <img src="{{asset('img')}}/admin.png" alt="--->" height="20px" width="20px">
                                                <b><big>{{ $account_head_type->name }}</big></b>
                                                
                                            </td>
                                            <td class="text-primary">
                                                <b><big>{{ $account_head_type->code }}</big></b>
                                            </td>
                                        </tr>
                                      <tbody>

                                        @if(count($account_head_types) && $account_head_type->code == 1000)
                                            @include('admin.account.ledger_account.manageChild',['childs' => $assets,'asset_fixed' => $asset_fixed,'asset_current' => $asset_current])
                                        @elseif(count($account_head_types) && $account_head_type->code == 3000)
                                            @include('admin.account.ledger_account.manageChild',['childs' => $liability,'current_liability_member_savings' => $current_liability_member_savings,'other_savings' => $other_savings,'long_term_liability' => $long_term_liability,'current_account_principal' => $current_account_principal,'others_liability' => $others_liability,'capital_fund' => $capital_fund,'loan_with_others' => $loan_with_others])
                                        @elseif(count($account_head_types) && $account_head_type->code == 4000)
                                            @include('admin.account.ledger_account.manageChild',['childs' => $income,'income_general' => $income_general,'income_other' => $income_other,'income_reimburse' => $income_reimburse,'income_training' => $income_training])
                                        @elseif(count($account_head_types) && $account_head_type->code == 5000)
                                            @include('admin.account.ledger_account.manageChild',['childs' => $expense,'expense_financial' => $expense_financial,'expense_current' => $expense_current,'expense_salary' => $expense_salary,'expense_operating' => $expense_operating,'expense_non_operating' => $expense_non_operating,'expense_training_centre' => $expense_training_centre,'expense_loss_on_sale_of_land' => $expense_loss_on_sale_of_land])
                                        @elseif(count($account_head_types) && $account_head_type->code == 6000)
                                            @include('admin.account.ledger_account.manageChild',['childs' => $equity])
                                        @endif

                                      @endforeach
                                        

                                    {{-- previous  --}}
                                    {{-- @foreach($roles as $role)
                                        <tr>
                                            <td>
                                                {{ $role->id }}
                                            </td>
                                            <td>
                                                <img src="{{asset('img')}}/admin.png" alt="--->" height="20px" width="20px">
                                                <b><big>{{ $role->name }}</big></b>
                                                
                                            </td>
                                        </tr>
                                        @if(count($role->childs))
                                            @include('admin.admin.role_wise_permission.manageChild',['childs' => $role->childs])
                                        @endif
                                    @endforeach --}}
                                    {{-- previous --}}
                                
                            </table>
                        
                    </div>
                </div>
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
        $('#tree1').DataTable();
    } );
</script>

@endsection