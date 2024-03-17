<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'resume_file',
        'status'
    ];
    public function job(){
        return $this->belongsTo(job::class,'job_id');
    }
    public function user(){
        return $this->belongsTo(user::class,'user_id');
    }
}
