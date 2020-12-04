<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komputer;

class KomputerController extends Controller
{
    public function index()
    {
        $komputer = Komputer::all();

        return view('komputer/data', ['komputer' => $komputer]);
    }
}
