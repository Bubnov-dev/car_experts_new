<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function all(){
        return response()->json(array_column(Brand::all()->toArray(), 'name'));
    }
}
