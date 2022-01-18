<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Customer;
use App\Models\Seller;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(Request $request){
        $budgets = Budget::join('sellers', 'sellers.id', '=', 'budgets.seller_id')
        ->join('customers', 'customers.id', 'budgets.customer_id');
        if($request->seller_id){
            $budgets = $budgets->where('sellers.id', $request->seller_id);
        }
        if($request->customer_id){
            $budgets = $budgets->where('customers.id', $request->customer_id);
        }
        $budgets = $budgets->get();

        $sellers = Seller::all();
        $customers = Customer::all();
        return view('budget.index', ['budgets' => $budgets,
            'customers' => $customers, 'sellers' => $sellers]);
//        dd($request->seller_id);
    }
}
