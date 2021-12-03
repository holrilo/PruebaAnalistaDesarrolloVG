<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Cliente extends Model
{
    use HasFactory;

    protected $table = "tipo_cliente";
    protected $primaryKey = "id_tipo_cliente";
}
