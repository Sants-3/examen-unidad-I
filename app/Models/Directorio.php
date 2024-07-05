<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;
    protected $table = "directorio";
    protected $primaryKey = "codigoEntrada";

    public $timestamps = false;
}
