<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Student extends Model
{
  protected $fillable = [
    'name',
    'email'
  ];

  public function post(): MorphMany
  {
    return $this->morphMany(Post::class, 'postable');
  }
}