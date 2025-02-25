<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $table='sala';

    protected $primary='id';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function sala(){
        return $this->hasMany('silla');
    }
}
