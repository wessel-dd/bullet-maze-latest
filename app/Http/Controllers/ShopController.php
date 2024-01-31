<?php

namespace App\Http\Controllers;
use App\Models\Inventories;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $items = Inventories::all();
        return view('shop.index', ['items' => $items]);
    }

  
   
}
