<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();
        $pattern = $request->is('foo/*');
        $url = $request->url();

        echo "Path method: $path<br/>";
        echo "is Method: $pattern<br/>";
        echo "URL method: $url";
    }
}
