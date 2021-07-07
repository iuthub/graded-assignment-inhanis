<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
    	return view('list.index');
    }
    public function edit(){
    	return view('task.edit');
    }
}
