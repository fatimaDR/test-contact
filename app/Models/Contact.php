<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'civilite', 
        'prenom',
        'nom', 
        'email', 
        'date-naissance', 
        'telephone', 
        'adresse', 
        'cp', 
        'ville',
        'pays', 
        'societe', 
        'sestinataire', 
        'message', 
        'newsletter', 
        'adresse-ip'
        ];

        // public function destinataire()
        // {
        //     return $this->belongsTo(Destinataire::class);
        // }
}
