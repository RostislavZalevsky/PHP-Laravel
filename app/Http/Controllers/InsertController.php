<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertController extends Controller
{
    public function InsertForm()
    {
        return view('create_table');
    }

    public function Insert(Request $request)
    {
        $name = $request->input('name');
        DB::insert("insert into `TableTest`(Name) values('$name')");
//        echo 'Success<br/>';
//        echo '<a href = "/insert">Click Here</a> to go back.';
        return redirect('/view');
    }
}
