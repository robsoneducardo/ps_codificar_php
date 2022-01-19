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
        $budgets = $budgets->get(['budgets.*', 'budgets.id as id']);
//        dd($budgets);

        $sellers = Seller::all();
        $customers = Customer::all();
        return view('budget.index', ['budgets' => $budgets,
            'customers' => $customers, 'sellers' => $sellers]);
//        dd($request->seller_id);
    }

    public function create(){
        $sellers = Seller::all();
        $customers = Customer::all();

        return view('budget.create', ['sellers' => $sellers, 'customers' => $customers]);

    }

    public function store(Request $request){
        Budget::create([
            'created' => $request->created,
            'customer_id' => $request->customer_id,
            'seller_id' => $request->seller_id,
            'description' => $request->description,
            'value' => $request->value,
        ]);
        return redirect()->route('budget-index');
    }

    public function destroy($id){
        Budget::where('id', $id)->delete();
        return redirect()->route('budget-index');
    }
}
