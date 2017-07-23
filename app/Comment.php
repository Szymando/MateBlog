<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;

class Comment extends Model
{
    public function post(){
      return $this->belongsTo(Post::class);
    }
}
