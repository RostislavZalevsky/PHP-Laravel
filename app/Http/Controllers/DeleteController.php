<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DeleteController extends Controller
{
    public function Remove($Id)
    {
       DB::delete("DELETE FROM `TableTest` WHERE `Id` = $Id");
       return redirect('/view');
    }
}
