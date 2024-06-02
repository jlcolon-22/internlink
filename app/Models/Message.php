<?php

namespace App\Models;

use App\Models\Convo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'receiver',
        'sender',
        'body',
        'markread',
        'convo_id'
    ];

    public function convo()
    {
        return $this->belongsTo(Convo::class,'convo_id');
    }
}
