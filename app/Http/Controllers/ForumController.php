<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController  extends Controller
{
    public function index()
    {
        // Your forum logic goes here
        return view('forum.index');
    }
}
