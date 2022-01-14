<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function create(){
        return view('seller.edit', []);
    }

    public function store(Request $request){
        // dd($request->all());
        Seller::create($request->all());
        // $name = $request->name;
        return redirect()->route('seller-index');
    }

    public function index(){
//         $sellers = [];
        $sellers = Seller::all();
        return view('seller.index', ['sellers'=>$sellers]);
//         $sellers = [];
//         return view('seller.index', [sellers=>$sellers]);
    }

    public function edit($id){
//         return "edit seller";
        $seller = Seller::where('id', $id)->first();
        if (!empty($seller)){
            return view('seller.edit', ["seller"=>$seller]);
        }
        else{
            return redirect()->route('seller-index');
        }
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $data = [
            'name' => $request->name,
        ];
        Seller::where('id', $id)->update($data);
        return redirect()->route('seller-index');
    }

    public function destroy($id){
        //alert("excluindo um vendedor.");
        // dd($id);
        Seller::where('id', $id)->delete();
        return redirect()->route('seller-index');
    }

}
