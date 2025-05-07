<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaComercial extends Model
{
    use HasFactory;

    protected $table = 'marcas_comerciais';

    protected $fillable = [
        'nome',
    ];

    public $timestamps = false;
}
