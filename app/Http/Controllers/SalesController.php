<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function transaction(){
        return view('order.TransactionView')
        ->with('title','Transactions')
        ->with('id','1')
        ->with('date','01-01-2021')
        ->with('amount','10000000');
    }
}
