<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarenkorbModel extends Model
{
    use HasFactory;

    protected $table = "warenkorb_liste";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'user_id',
        'produkt_id',
        'menge',
        'gewicht_warenkorb'
    ];
}
