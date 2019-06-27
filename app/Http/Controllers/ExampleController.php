<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function test(){
        return response()->json(['Exito Perro!'], 200);
    }
}
