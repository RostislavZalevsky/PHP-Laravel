<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    public function Index()
    {
        $table = DB::select('SELECT * FROM `TableTest`');
        return view('view', ['table'=>$table]);
    }
}
