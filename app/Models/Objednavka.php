<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objednavka extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'meno',
        'priezvisko',
        'telCislo',
        'rodneCislo',
        'poradoveCislo',
        'miesto',
        'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
