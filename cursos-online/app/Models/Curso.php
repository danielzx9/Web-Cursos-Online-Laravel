<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Curso extends Model
{
    //
    use HasFactory;

    protected $fillable = ['user_id', 'titulo', 'descripcion', 'categoria', 'imagen', 'precio'];

    public function instructor(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
