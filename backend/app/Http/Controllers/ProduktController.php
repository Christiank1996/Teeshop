<?php

namespace App\Http\Controllers;

use App\Models\TeesortenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduktController extends Controller
{
    public function getTeesorten() {
        $produkte = DB::table('produkt')
            ->leftJoin('produkt_preise', 'produkt.id', '=', 'produkt_preise.produkt_id')
            ->leftJoin('preise', 'produkt_preise.preise_id', '=', 'preise.id')
            ->groupBy('produkt.id')
            ->get();
        return response()->json($produkte);
    }
}
