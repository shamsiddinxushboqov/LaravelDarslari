<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xodimlar extends Model
{
    protected $table='xodimlar';
    protected $fillable=['Familyasi','Ismi','Otasining_ismi','Lavozimi','Yoshi','Maoshi'];
}
