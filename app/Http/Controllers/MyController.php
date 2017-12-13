<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        echo 'index';
    }

    public function create()
    {
        echo 'create';
    }

    public function store(Request $request)
    {
        echo 'store '.$request;
    }

    public function show($id)
    {
        echo 'show '.$id;
    }

    public function edit($id)
    {
        echo 'edit '.$id;
    }

    public function update(Request $request, $id)
    {
        echo 'update '.$request.' '.$id;
    }

    public  function destroy($id)
    {
        echo 'destroy '.$id;
    }
}
