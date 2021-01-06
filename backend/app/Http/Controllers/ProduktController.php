<?php

namespace App\Http\Controllers;

use App\Models\TeesortenModel;
use Illuminate\Http\Request;

class ProduktController extends Controller
{
    public function getTeesorten() {
        $produkte = TeesortenModel::all();
        return response()->json($produkte);
    }
}
