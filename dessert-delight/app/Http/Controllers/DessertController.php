<?php

namespace App\Http\Controllers;

use App\Models\Dessert;
use Illuminate\Http\Request;

class DessertController extends Controller
{
    public function index()
    {
        $desserts = Dessert::all();
        return view('desserts.index', compact('desserts'));
    }
}
