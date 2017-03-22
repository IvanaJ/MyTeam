<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    public static function latest(){
       return  static::SelectRaw('title')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

    }
}

