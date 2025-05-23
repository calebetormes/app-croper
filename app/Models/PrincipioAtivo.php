<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrincipioAtivo extends Model
{
    use HasFactory;

    protected $table = 'principios_ativos';

    protected $fillable = [
        'nome',
    ];

    public $timestamps = false;
}
