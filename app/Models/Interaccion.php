<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'omni.dbo.omni_rimac_interaccion';
    protected $fillable = ['session_id','accion', 'seguro', 'subseguro', 'desglose' ,'seccion' ,'created'];
}