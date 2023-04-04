<?php

namespace App\Http\Controllers;

use App\Models\TyreBrand;
use Illuminate\Http\Request;

class TyreBrandController extends Controller
{
    public function all(){
        return response()->json(array_column(TyreBrand::all()->toArray(), 'name'));

    }
}
