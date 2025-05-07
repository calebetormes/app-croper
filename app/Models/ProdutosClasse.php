<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosClasse extends Model
{
    use HasFactory;

    protected $table = 'produtos_classes';

    protected $fillable = [
        'nome',
    ];

    public $timestamps = false;
}
