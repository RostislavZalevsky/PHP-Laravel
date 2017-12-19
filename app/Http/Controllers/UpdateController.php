<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UpdateController extends Controller
{
    public function Show($Id)
    {
        $table = DB::select("SELECT * FROM `TableTest` WHERE `Id` = $Id");
        return view('update', ['table'=>$table]);
    }

    public function Edit(Request $request, $Id)
    {
        $name = $request->input('name');
        DB::update("UPDATE `TableTest` SET `Name` = '$name' WHERE `Id` = $Id");
//        echo "Record updated successfully.<br/>";
//        echo '<a href = "/view">Click Here</a> to go back.';
        return redirect('/view');
    }
}
