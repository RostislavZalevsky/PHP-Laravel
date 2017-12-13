<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('Second');
    }

    public function showPath(Request $request)
    {
        $uri = $request->path();
        $url = $request->url();
        $method = $request->method();

        echo "<br/>URI: $uri<br/>URL: $url<br/>Method: $method";
    }
}
