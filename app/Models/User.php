<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // The attributes that are mass assignable.
    // @var list<string>
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'role_id',
    ];

    //  The attributes that should be hidden for serialization.
    //  @var list<string>
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cada usuário pertence a um papel (role)
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Usuário como gerente (relacionamento com vendedores)
    public function vendedores()
    {
        return $this->hasMany(GerenteVendedor::class, 'gerente');
    }

    // Usuário como vendedor (relacionamento com gerentes)
    public function gerentes()
    {
        return $this->hasMany(GerenteVendedor::class, 'vendedor');
    }

    /*
      Get the attributes that should be cast.
      @return array<string, string>
    */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
