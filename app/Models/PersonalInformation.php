<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    ];
    public function setUserIdAttribute($value)
    {
        $this->attributes['user_id'] = $value;
    }
    
}
