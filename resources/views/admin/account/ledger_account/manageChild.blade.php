				
				@foreach($childs as $child)
					<tbody>
						<tr>
								<td>
									{{ $child->id }}
								</td>
								<td>
										@php
					                          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
					                    @endphp
										<img src="{{asset('img')}}/right-arrow.png" alt="--->" height="20px" width="20px">
					        		{{ $child->name }}
					        
					    		</td>
					    		<td>
									{{ $child->code }}
								</td>
					  	</tr>
					  			@if(count($childs) && $child->code == 1100)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $asset_fixed])
					            @elseif(count($childs) && $child->code == 1500)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $asset_current])
					            @elseif(count($childs) && $child->code == 3100)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $current_liability_member_savings])
					            @elseif(count($childs) && $child->code == 3200)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $other_savings])
					            @elseif(count($childs) && $child->code == 3300)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $long_term_liability])
					            @elseif(count($childs) && $child->code == 3400)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $current_account_principal])
					            @elseif(count($childs) && $child->code == 3500)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $others_liability])
					            @elseif(count($childs) && $child->code == 3600)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $capital_fund])
					            @elseif(count($childs) && $child->code == 3700)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $loan_with_others])
					            @elseif(count($childs) && $child->code == 4100)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $income_general])
					            @elseif(count($childs) && $child->code == 4200)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $income_other])
					            @elseif(count($childs) && $child->code == 7700)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $income_reimburse])
					            @elseif(count($childs) && $child->code == 4500)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $income_training])
					            @elseif(count($childs) && $child->code == 5100)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $expense_financial])
					            @elseif(count($childs) && $child->code == 5200)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $expense_current])
					            @elseif(count($childs) && $child->code == 5300)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $expense_salary])
					            @elseif(count($childs) && $child->code == 5400)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $expense_operating])
					            @elseif(count($childs) && $child->code == 5600)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $expense_non_operating])
					            @elseif(count($childs) && $child->code == 5700)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $expense_training_centre])
					            @elseif(count($childs) && $child->code == 5001)
					            	@include('admin.account.ledger_account.manageChild2',['childs' => $expense_loss_on_sale_of_land])
					        	@endif
					</tbody>
				@endforeach
				
									