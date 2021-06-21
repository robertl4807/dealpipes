<?php

namespace App\Traits;

use App\Models\Note;

trait NoteTrait {

  public function notes(){
    return $this->hasMany(Note::class);
  }

}