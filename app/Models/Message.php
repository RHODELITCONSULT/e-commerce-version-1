<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ["email","subject","message_text","name","replied_at","reply_status","read_at","reply_text"];

    protected $casts =["reply_status"=>"boolean"];
}
