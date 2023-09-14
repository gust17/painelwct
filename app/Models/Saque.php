<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saque extends Model
{
    use HasFactory;


    protected $connection = 'mysql2';


    protected $table = 'saques';

    protected $primaryKey = 'id';


    public function user()
    {
        return $this->belongsTo(UserSistema::class, 'id_usuario', 'id');
    }

    public function extrato()
    {
        return $this->hasOne(Extrato::class, 'referencia', 'id');
    }
}
