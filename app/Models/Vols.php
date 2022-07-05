<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\vol;

class Vols extends Model
{
    use HasFactory;
     protected $fillable = [  'code', 'date_depart','heure-depart', 'nombre_classe_A','nombre_classe_B' ,'prix_classe_A',
     'prix_classe_B'];
}
