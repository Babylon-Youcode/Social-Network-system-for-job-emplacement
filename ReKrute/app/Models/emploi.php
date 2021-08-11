<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emploi extends Model
{
    use HasFactory;

    protected $table = 'emplois';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'domaine',
        'ville',
        'condition',
        'datedebut',
        'datefin',
    ];

}
