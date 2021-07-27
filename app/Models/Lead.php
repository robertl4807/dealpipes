<?php

namespace App\Models;

use App\Traits\NoteTrait;
use App\Traits\TagTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
  use HasFactory, NoteTrait, TagTrait;

  protected $guarded = ['id'];

  public function user(){
    return $this->belongsTo(User::class);
  }

}
