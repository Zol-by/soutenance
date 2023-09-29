<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurySoutenance extends Model
{
    protected $guarded =[

    ];
    use HasFactory;

    // function Enseignant ()
    // {
    //     return $this->belongsTo(Enseignant::class,'id_enseignant');
    // }
    // function Inscription ()
    // {
    //     return $this->belongsTo(Inscription::class,'id_etudiant');
    // }
    // function Dm_Ms ()
    // {
    //     return $this->belongsTo(dm__ms::class,'id_ms');
    // }

}
