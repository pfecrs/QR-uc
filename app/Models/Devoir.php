<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoir extends Model
{
    use HasFactory;

    protected $fillable = [
        'matiere',
        'type',
        'date_devoir',
        'num_cin_etudiant',
        'num_cin_correcteur',
        'note',
    ];
}
