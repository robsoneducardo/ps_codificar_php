<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return view('customer.edit', []);
    }

    public function store(Request $request){
        // dd($request->all());
        Customer::create($request->all());
        // $name = $request->name;
        return redirect()->route('customer-index');
    }

    public function index(){
//         $customers = [];
        $customers = Customer::all();
        return view('customer.index', ['customers'=>$customers]);
//         $customers = [];
//         return view('customer.index', [customers=>$customers]);
    }

    public function edit($id){
//         return "edit customer";
        $customer = Customer::where('id', $id)->first();
        if (!empty($customer)){
            return view('customer.edit', ["customer"=>$customer]);
        }
        else{
            return redirect()->route('customer-index');
        }
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $data = [
            'name' => $request->name,
        ];
        Customer::where('id', $id)->update($data);
        return redirect()->route('customer-index');
    }

    public function destroy($id){
        //alert("excluindo um vendedor.");
        // dd($id);
        Customer::where('id', $id)->delete();
        return redirect()->route('customer-index');
    }

}
