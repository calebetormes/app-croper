<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GerenteVendedor extends Model
{
    //
    use HasFactory;

    public $timestamps = false;

    protected $table = 'gerente_vendedor';

    protected $primaryKey = ['vendedor', 'gerente'];

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = ['vendedor', 'gerente'];

    // Vendedor associado
    public function vendedor()
    {
        return $this->belongsTo(User::class, 'vendedor');
    }

    // Gerente associado
    public function gerente()
    {
        return $this->belongsTo(User::class, 'gerente');
    }
}
