<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestamo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'prestamos';
    protected $fillable = [
        'usuario_id',
        'libro_id',
        'dia'
    ];

    public function libro(){
        return $this->hasOne(Libro::class,'libro_id');
    }
    public function usuario(){
        return $this->hasOne(Usuario::class,'usuario_id');
    }
}
