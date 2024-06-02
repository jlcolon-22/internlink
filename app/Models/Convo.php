<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convo extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'user_id',
        'type'

    ];

    public function Company()
    {
        return $this->belongsTo(Company::class,'user_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'user_id');
    }
}
