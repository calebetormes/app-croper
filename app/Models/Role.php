<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    // Um papel pode ter muitos usuários
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
