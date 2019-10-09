				
				@foreach($childs as $child)
					<tbody>
						<tr>
								<td>
									{{ $child->id }}
								</td>
								<td>
										@php
					                          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
					                    @endphp
										<img src="{{asset('img')}}/right-arrow.png" alt="--->" height="20px" width="20px">
					        		{{ $child->name }}
					        
					    		</td>
					    		<td>
									{{ $child->code }}
								</td>
					  	</tr>
					  			{{-- @if(count($asset_childs))
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $asset_childs])
					        	@endif --}}
					</tbody>
				@endforeach
				
									