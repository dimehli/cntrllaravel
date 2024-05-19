<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student'; // Spécifie explicitement le nom de la table
    protected $primaryKey = 'id'; // Spécifie explicitement la clé primaire

    protected $fillable = [
        'name',
        'image',
        'level',
        'email',
        'mobile',
    ];
}

