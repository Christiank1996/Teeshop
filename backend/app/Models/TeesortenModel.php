<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeesortenModel extends Model
{
    use HasFactory;

    protected $table = "produkt";
    protected $fillable = [
        'name',
        'beschreibung',
        'art',
        'imagename',
    ];
}
