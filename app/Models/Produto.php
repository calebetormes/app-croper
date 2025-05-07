<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'classe',
        'principios_ativo',
        'marca_comercial',
        'tipos_de_peso',
        'familia',
        'apresentacao',
        'dose_sugerida_hectare',
    ];

    public $timestamps = false;

    // Relações
    public function classeProduto()
    {
        return $this->belongsTo(ProdutosClasse::class, 'classe');
    }

    public function principioAtivo()
    {
        return $this->belongsTo(PrincipioAtivo::class, 'principios_ativo');
    }

    public function marcaComercial()
    {
        return $this->belongsTo(MarcaComercial::class, 'marca_comercial');
    }

    public function tipoDePeso()
    {
        return $this->belongsTo(TipoDePeso::class, 'tipos_de_peso');
    }

    public function familiaProduto()
    {
        return $this->belongsTo(Familia::class, 'familia');
    }
}
