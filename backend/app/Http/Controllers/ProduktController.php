<?php

namespace App\Http\Controllers;

use App\Models\TeesortenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduktController extends Controller
{
    public function getTeesorten() {
        $produkte = DB::table('produkt')->get();
        return response()->json($produkte);
    }
}
