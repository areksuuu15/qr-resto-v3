<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use App\Models\TableNumber;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\File;
class ListController extends Controller
{
    //

    public function index(Request $request){
    $url = $request->url();
    // Extract the last part of the URL
    $variable = explode('/', $url)[count(explode('/', $url)) - 1];
    $this->updateOccupancy($variable);









        return view('welcome', ['listItems'=> ListItem::where('is_complete', 0)->get()] )->with('variable', $variable);


    }

   public function search() {
    $search_text = $_GET['query'];
    $listItems = ListItem::where('name', 'LIKE', '%'.$search_text.'%')->get();

    return view('search', compact('listItems'));

   }


    public function profilePage(){
      return view('profilePage');
    }
    public function crud(){

        return view('crud', ['listItems'=> ListItem::where('is_complete', 0)->get()]);

    }



    public function markCom($id){
        $listItem = ListItem::find($id);
        //
        //$listItem->is_complete=1;
        $listItem->delete();

    return back()->with('failed', 'Table occupancy failed to update!');

    }



public function update(Request $request, $id)
{
    $listitems = ListItem::find($id);
    $listitems->update($request->all());
    return redirect()->route('listitems.index');
}

    public function saveitem(Request $request){
        $newListItem = new ListItem;
        $newListItem->name = $request->name;
        $newListItem->is_complete = 0;
if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $filename);
        $newListItem->image = $filename;
    }
        $newListItem->description = $request->description;
        $newListItem->price = $request->price;
        $newListItem->category = $request->category;
        $newListItem->save();

    return back()->with('success', 'Table occupancy updated successfully!');

    }


public function editMenu($id){
  $listItemDesu = ListItem::find($id);
  return view('editMenu', compact('listItemDesu'));

}


public function updateMenu(Request $request, $id){
  $listItemDesu = ListItem::find($id);
if($request->hasFile('image')){

        $destination = 'public/img'.$listItemDesu->image;
        if(File::exists($destination)){
          File::delete($destination);
        }
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $filename);
        $listItemDesu->image = $filename;
    }
 

  $listItemDesu->update($request->all());
  return redirect('crud');

}

public function updateOccupancy(Request $request, $variable)
{
  $tableNumber = TableNumber::find($variable);
  if (!$tableNumber) {
    abort(404, 'Table number not found');
  }
  $selectedItems = json_decode($request->input('selectedItems'), true);
foreach ($selectedItems as $selectedItem) {
    // Access the properties of each item
    $id = $variable;
    $name = $selectedItem['name'];
    $price = $selectedItem['price'];
    $quantity = $selectedItem['quantity'];
    
    // Do something with the extracted values
    // ...
    DB::table('orders')->insert([
      'id' => $id,
      'name' => $name,
      'price' => $price,
      'quantity' => $quantity
    ]);
  }



    $rowsAffected = DB::table('table_numbers')
    ->where('id', $variable)
    ->update(['is_occupied' => 1]);

  if ($rowsAffected) {
    return back()->with('success', 'Table occupancy updated successfully!');
  } else {
    Log::error('Error updating table occupancy: No rows affected');
    return back()->with('failed', 'Table occupancy failed to update!');
  }
  }


  
}








 


   



