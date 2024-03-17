<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class job extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "job_description",
        "category_id",
        "no_of_seats",
        "salary",
        "prefered_gender",
        "experice_required",
        "company_id",
        "employer_id",
        "job_type"
    

    ];

    protected static function booted()
    {
        // Add a global scope to include only jobs with a related company
        static::addGlobalScope('hasCompany', function (Builder $builder) {
            $builder->whereHas('company');
        });
    }


    public function applications(){
        return $this->hasMany(application::class,'job_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'employer_id','id');
    }
    public function company(){
        return $this->belongsTo(company::class,'company_id','id');
    }
    public function category(){
        return $this->belongsTo(category::class,'category_id','id');
    }
}
