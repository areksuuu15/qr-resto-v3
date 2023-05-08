<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableNumber;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

use App\Models\ListItem;

class QrCodeController extends Controller
{
    public function index()
    {
$tableNumbers = TableNumber::select('table_number')->get();
$qrCodes = [];

 foreach ($tableNumbers as $tableNumber) {
        
        $url = "http://127.0.0.1:8000/welcome/" .  Crypt::encryptString($tableNumber->table_number); 
        $qrCode = QrCode::size(100)->generate($url);
        $fileName = "qr-code-" . $tableNumber->table_number . ".png";
        Storage::put("qr-codes/$fileName", $qrCode);

        array_push($qrCodes, ['table_number' => $tableNumber->table_number, 'qr_code' => $qrCode]);

    }
    $qrCodes = $this->paginate($qrCodes, 3);
    $qrCodes->path('');
    $qrCodes->withPath('/qr-codes');



    return view('qr-codes.index', compact('qrCodes'));

    }


    public function paginate($items, $perPage = 4, $page = null){
        $page =  $page ?: (Paginator::resolveCurrentPage() ?: 1);



        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage;
        $itemstoshow = array_slice($items, $offset, $perPage);
        return new LengthAwarePaginator($itemstoshow, $total, $perPage);
    }



    public function menu(Request $request,$tableNumber){
    $url = $request->url();
    // Extract the last part of the URL
    $variable = explode('/', $url)[count(explode('/', $url)) - 1];
    if($request->has('search')){
      $data = ListItem::where('name', 'LIKE', '%' .$request->search. '%');
    }




    return view('welcome', ['listItems'=> ListItem::where('is_complete', 0)->get()], compact('tableNumber') )->with('variable', $variable);

    }

    public function crud(){
    return view('crud', ['listItems'=> ListItem::where('is_complete', 0)->simplePaginate(3)]);
    }
    public function addMenu(){
    return view('addMenu', ['listItems'=> ListItem::where('is_complete', 0)->get()]);
    }



    //public function saveTable(Request $request){
     //   $newTableNumbers 
    //}

//   public function storeNumbers(Request $request)
//   {
//       $numbers = explode(',', $request->numbers);
//     foreach ($numbers as $number) {
//           DB::table('table_numbers')->insert([
//               'table_number' => $number
//           ]);
//       }

//       return redirect()->back()->with('success', 'Numbers inserted successfully!');
//   }

public function storeNumbers(Request $request)
{
    $numbers = range(1, intval($request->numbers));
    foreach ($numbers as $number) {
        DB::table('table_numbers')->insert([
            'table_number' => $number
        ]);
    }

    return redirect()->back()->with('success', 'Numbers inserted successfully!');
}


public function deleteQR(Request $request){
 DB::table('table_numbers')->truncate();

    return redirect()->back()->with('success', 'Numbers inserted successfully!');
}


}
