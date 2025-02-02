<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    public final function postUser():object {
        return $this->belongsTo(User::class,'user_id');
    }

    public final function postField():object {
        return $this->belongsTo(Field::class,'field_id');
    }
}
