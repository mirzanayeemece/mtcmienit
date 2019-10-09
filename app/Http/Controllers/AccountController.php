<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use DB;
use PDF;
use Auth;
use Session;
use Exception;
Session_start();

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    // ----- METHODS FOR LEDGER-ACCOUNT ----- //
    //ledger-account
    public function ledger_account(){
        $account_head_types = DB::table('account_head_types')
        					->orderBy('id', 'asc')
                          	->get();
        $assets = DB::table('account_heads')
        					->where('parent_id', '=', 2)
        					->where('parent_code', '=', 1000)
        					->get();
          $asset_fixed = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 1100)
                    ->get();
          $asset_current = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 1500)
                    ->get();

       	$liability = DB::table('account_heads')
        					->where('parent_id', '=', 2)
        					->where('parent_code', '=', 3000)
        					->get();
          $current_liability_member_savings = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 3100)
                    ->get();
          $other_savings = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 3200)
                    ->get();
          $long_term_liability = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 3300)
                    ->get();
          $current_account_principal = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 3400)
                    ->get();
          $others_liability = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 3500)
                    ->get();
          $capital_fund = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 3600)
                    ->get();
          $loan_with_others = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 3700)
                    ->get();

        $income = DB::table('account_heads')
        					->where('parent_id', '=', 2)
        					->where('parent_code', '=', 4000)
        					->get();
          $income_general = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 4100)
                    ->get();
          $income_other = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 4200)
                    ->get();
          $income_reimburse = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 7700)
                    ->get();
          $income_training = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 4500)
                    ->get();

       	$expense = DB::table('account_heads')
        					->where('parent_id', '=', 2)
        					->where('parent_code', '=', 5000)
        					->get();
          $expense_financial = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 5100)
                    ->get();
          $expense_current = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 5200)
                    ->get();          
          $expense_salary = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 5300)
                    ->get();          
          $expense_operating = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 5400)
                    ->get();
          $expense_non_operating = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 5600)
                    ->get();
          $expense_training_centre = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 5700)
                    ->get();
          $expense_loss_on_sale_of_land = DB::table('account_heads')
                    ->where('parent_id', '=', 3)
                    ->where('parent_code', '=', 5001)
                    ->get();                                        

        $equity = DB::table('account_heads')
        					->where('parent_id', '=', 2)
        					->where('parent_code', '=', 6000)
        					->get();

        $manage_ledger_accounts = view('admin.account.ledger_account.ledger_accounts')
                        ->with('account_head_types',$account_head_types)
                          	->with('assets',$assets)
                                ->with('asset_fixed',$asset_fixed)
                                ->with('asset_current',$asset_current)
                          	->with('liability',$liability)
                                ->with('current_liability_member_savings',$current_liability_member_savings)
                                ->with('other_savings',$other_savings)
                                ->with('long_term_liability',$long_term_liability)
                                ->with('current_account_principal',$current_account_principal)
                                ->with('others_liability',$others_liability)
                                ->with('capital_fund',$capital_fund)
                                ->with('loan_with_others',$loan_with_others)
                          	->with('income',$income)
                                ->with('income_general',$income_general)
                                ->with('income_other',$income_other)
                                ->with('income_reimburse',$income_reimburse)
                                ->with('income_training',$income_training)
                          	->with('expense',$expense)
                                ->with('expense_financial',$expense_financial)
                                ->with('expense_current',$expense_current)
                                ->with('expense_salary',$expense_salary)
                                ->with('expense_operating',$expense_operating)
                                ->with('expense_non_operating',$expense_non_operating)
                                ->with('expense_training_centre',$expense_training_centre)
                                ->with('expense_loss_on_sale_of_land',$expense_loss_on_sale_of_land)
                          	->with('equity',$equity);
        return view('admin.master')
                          	->with('admin.account.ledger_account.ledger_accounts',$manage_ledger_accounts);
    }
}
