<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['nom', 'prenom', 'sexe', 'choix_de_class','vols_id'];
    use HasFactory;
}
