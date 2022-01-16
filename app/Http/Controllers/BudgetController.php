<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Customer;
use App\Models\Seller;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(){
        $budgets = Budget::all();
        $sellers = Seller::all();
        $customers = Customer::all();
        return view('budget.index', ['budgets' => $budgets,
            'customers' => $customers, 'sellers' => $sellers]);
    }
}
