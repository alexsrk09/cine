<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silla extends Model
{
    use HasFactory;

    protected $trable='silla';

    protected $primary='id';

    protected $fillable = [
        'ocupada',
    ];

    public function sala(){
        return $this->hasOne('sala');
    }
}
