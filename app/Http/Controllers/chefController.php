<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\tableNumber;
use App\Models\finishOrder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Crypt;
class chefController extends Controller
{
    //
    public function index(){

$tableNumbers = tableNumber::where('is_occupied', 1)->get();

$orders = order::whereIn('id', $tableNumbers->pluck('id'))->get();

return view('chef', compact('orders'));


    


    }

    public function finishOrder(Request $request){
    $totalPrice = $request->input('total_price');
    $orderId = crypt::decrypt($request->input('order_id'));

    $orderTable = order::find($orderId); 
    $orderTable->delete();

 
    
    $finishOrder = new FinishOrder();
    $finishOrder->table_number = $orderId;
    $finishOrder->total = $totalPrice;
    $finishOrder->save();

   

    $rowsAffected = DB::table('table_numbers')
    ->where('id', $orderId)
    ->update(['is_occupied' => 0]);

        $orders = order::get();
$tableNumbers = tableNumber::where('is_occupied', 1)->get();

$orders = order::whereIn('id', $tableNumbers->pluck('id'))->get();
return redirect()->route('chef');


//return view('chef', compact('orders'));






    }
}
