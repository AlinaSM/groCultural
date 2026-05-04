<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MunicipioHasTradicion extends Model
{
    protected $table = 'municipios_tradiciones'; 

    protected $primaryKey = 'id_municipios_tradiciones';
}
