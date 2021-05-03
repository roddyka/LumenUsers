<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    //necessario para encontrar a tabela
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //para proteger nossa tabela dizendo os items exatos dela
    protected $fillable = [
        'name', 'email', 'birth'
    ];

    protected $casts = [
        'birth' => 'Timestamp'
    ];

    //desabilitando o timestamps caso criemos tabelas pelo migrations ou lermos (nossa tabela nao tem os campos de create_at, update_at....)
    public $timestamps = false;
    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
