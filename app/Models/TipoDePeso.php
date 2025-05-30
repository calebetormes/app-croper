<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDePeso extends Model
{
    use HasFactory;

    protected $table = 'tipos_de_peso';

    protected $fillable = [
        'tipo_peso',
    ];

    public $timestamps = false;
}
