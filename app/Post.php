<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title','content','thumbnail'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
