<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use App\Models\User;

class UserInfo extends Model
{
    protected $table = 'user_info';

    protected $fillable = [
        'name', 'phone', 'address', 'gender', 'avatar'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
