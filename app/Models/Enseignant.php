<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Inscription;
use APP\Models\Enseignant;


class Enseignant extends Model
{
    protected $guarded =[

    ];
    function Enseignant (){
        return $this->hasOne(Enseignant::class);
    }
    function Inscription (){
        return $this->hasOne(Inscription::class);
    }
}
