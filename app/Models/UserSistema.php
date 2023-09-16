<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSistema extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'usuarios_cadastros';


    protected $primaryKey = 'id';


    public function extratos()
    {
        return $this->hasMany(Extrato::class,'id_usuario','id');
    }

    public function faturas()
    {
        return $this->hasMany(Fatura::class,'id_usuario','id');
    }
}
