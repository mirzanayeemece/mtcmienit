
@foreach($childs as $child)
	<tbody>
		<tr>
				<td>
					{{ $child->id }}
				</td>
				<td>
						@php
	                          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	                    @endphp
						<img src="{{asset('img')}}/child.png" alt="--->" height="20px" width="20px">
	        		{{ $child->name }}
	        
	    		</td>
	    		<td>
					{{ $child->code }}
				</td>
	  	</tr>
	  			{{-- @if(count($childs) && $child->code == 1750)
					@include('admin.account.ledger_account.manageChild4',['childs' => $cash_and_bank_cash_in_hand])
				@elseif(count($childs) && $child->code == 1800)
					@include('admin.account.ledger_account.manageChild4',['childs' => $cash_and_bank_cash_at_bank])
	        	@endif --}}
	</tbody>
@endforeach					