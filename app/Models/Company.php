<?php

namespace App\Models;

use App\Models\Job;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'company_name',
        'company_profile',
        'company_background',
        'company_description',
        'company_address',
        'company_email',
        'company_contact_number',
        'password',
        'status',
        'company_employer_name',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class,'company_id','id');
    }

}
