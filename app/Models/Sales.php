<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table='sales';
    protected $fillable=['id_mahsulot','Nomi','Narxi','Soni'];
}
