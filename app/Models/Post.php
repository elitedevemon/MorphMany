<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends Model
{

  protected $guarded = [];
  public function postable(): MorphTo
  {
    return $this->morphTo();
  }
}