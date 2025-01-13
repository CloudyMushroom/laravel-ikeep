<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ikeepuser extends Model
{
    use HasFactory;
    
    protected $table = 'ikeepusers';
    protected $fillable = [
        'decrypt_PIN',
        'seed_PHRASE'
    ];

    public function accounts()
    {
        return $this->hasMany(ikeepaccount::class,'seed_PHRASE', 'seed_PHRASE');
    }

    
}
