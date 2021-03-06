<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable=[
        'title','user_id','description',
    ];

    public static function latest(){
       return  static::select('title')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

    }

    public static function allProjects(){
        return  static::select('title','description')
            ->orderBy('created_at', 'desc')
            ->paginate(5);


    }
    public function getRouteKeyName()
    {
        return 'title';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function applications(){
        return $this->belongsToMany(User::class);
    }
}

