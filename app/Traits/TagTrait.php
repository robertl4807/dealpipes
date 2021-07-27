<?php

namespace App\Traits;

use App\Models\Tag;

trait TagTrait {

  public function tags(){
    return $this->hasMany(Tag::class);
  }

}