<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use App\Models\TableNumber;
use App\Models\Role;
use App\Models\User;
use App\Models\order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tableCount = TableNumber::count();
        $listItemCount = ListItem::count();
        $RoleCount = Role::count();
        $UserCount = User::count();
        $orderCount = order::count();



        return view('home' , ['listItems'=> ListItem::where('is_complete', 0)->get()], compact('tableCount', 'listItemCount', 'RoleCount', 'UserCount', 'orderCount'));
    }
}
