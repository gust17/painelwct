<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrato extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';


    protected $table = 'extrato';


    protected $primaryKey = 'id';



    public function saque()
    {
        return $this->belongsTo(Saque::class, 'referencia', 'id');
    }
}
