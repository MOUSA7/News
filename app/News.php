<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title','content','user_id','section_id','photo_id'];
    //

    public function photo(){
        return $this->belongsTo(Photo::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
