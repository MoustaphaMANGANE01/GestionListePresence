<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    protected $fillable=['nom',
                        'prenom',
                        'classe',
                        'date_naiss',
                        'lieu_naiss'
];
    
}