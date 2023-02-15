<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\tableNumber;
use Illuminate\Support\Facades\DB;
class chefController extends Controller
{
    //
    public function index(){

$tableNumbers = tableNumber::where('is_occupied', 1)->get();

$orders = order::whereIn('id', $tableNumbers->pluck('id'))->get();

return view('chef', compact('orders'));


    


    }

    public function finishOrder(Request $request){

    $orderId = $request->input('order_id');
    $rowsAffected = DB::table('table_numbers')
    ->where('id', $orderId)
    ->update(['is_occupied' => 0]);

        $orders = order::get();
$tableNumbers = tableNumber::where('is_occupied', 1)->get();

$orders = order::whereIn('id', $tableNumbers->pluck('id'))->get();

return view('chef', compact('orders'));






    }
}
