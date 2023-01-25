<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinataire extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'service',];

    // public function contacts()
   	//  {
    //     return $this->hasMany(Contact::class);
    // }
}
