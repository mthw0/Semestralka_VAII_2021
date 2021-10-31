<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OckovacieMiesto extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'nazov',
        'adresa',
        'popis',
        'obrazok',
        'dennaKapacita'
    ];
}
