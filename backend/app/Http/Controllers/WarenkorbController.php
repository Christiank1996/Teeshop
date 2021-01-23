<?php

namespace App\Http\Controllers;

use App\Models\WarenkorbModel;
use Illuminate\Http\Request;

class WarenkorbController extends Controller
{
    public function getWarenkorb(Request $request) {
        return WarenkorbModel::leftjoin('produkt', 'warenkorb_liste.produkt_id', '=', 'produkt.id')->where('warenkorb_liste.user_id', '=', $request->input('id'))->get();
    }

    public function addCart(Request $request)
    {
        $check = WarenkorbModel::where('user_id', '=', $request->input('user_id'))->where('produkt_id', '=', $request->input('produkt_id'))->
        where('gewicht_warenkorb', '=', $request->input('gewicht'))->first();
        if ($check === null) {
            $warenkorb = WarenkorbModel::create(['produkt_id' => $request->input('produkt_id'),
                'user_id' => $request->input('user_id'), 'menge' => $request->input('menge'), 'gewicht_warenkorb' => $request->input('gewicht')]);
            $warenkorb->save();
        } else {
            $check->menge = $check->menge + $request->input('menge');
            $check->save();
        }
    }
}
