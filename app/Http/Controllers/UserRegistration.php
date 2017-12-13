<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function Registration(Request $request)
    {
        $name = $request->input('name');
        echo "Your is name: $name<br/>";

        $username = $request->input('username');
        echo "And username: $username";
    }
}
