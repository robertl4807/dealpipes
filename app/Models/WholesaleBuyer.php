<?php

namespace App\Models;

use App\Traits\NoteTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WholesaleBuyer extends Model
{
  use HasFactory, NoteTrait;

  protected $guarded = ['id'];

  public function user(){
    return $this->belongsTo(User::class);
  }

}
