<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'category',
        'description',
        'location',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
}
