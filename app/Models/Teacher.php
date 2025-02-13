<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $fillable = ['name', 'email'];

  public function post()
  {
    return $this->morphMany(Post::class, 'postable');
  }
}