<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\purchase;

class PurchaseController extends Controller
{
    //
    public function create(){
        return view('Customer_product.create');
    }
    public function store(Request $request){
        $purchase = new Purchase();
        $purchase->customer_id = $request->input('customer_id');
        $purchase->product_id = $request->input('product_id');
        $purchase->Gaurantor_id = $request->input('gaurantor_id');
        $purchase->quantity = $request->input('quantity');
        $purchase->save();
        return view('Customer_product.read')->with('success', 'you product has been bought');

    }
}
