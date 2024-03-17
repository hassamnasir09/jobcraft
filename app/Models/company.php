<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'location',
        'user_id',
        'phone'


    ];

    public function jobs(){
        return $this->hasMany(job::class,'company_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
