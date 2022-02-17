<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    use HasFactory;
    protected $table="friends_request";
    protected $fillable = [
        'source_id',
        'target_id',
        'status'
    ];
}
