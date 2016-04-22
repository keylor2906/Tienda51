<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = "usuario";

    protected $primaryKey = 'idusuario';

    protected $fillable = ['nombre', 'nick', 'email', 'password', 'tipo'];

}
