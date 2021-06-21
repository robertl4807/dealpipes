<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automation extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function userGroup(){
    return $this->belongsTo(UserGroup::class);
  }

  public function lead(){
    return $this->belongsTo(Lead::class);
  }

  public function campaign(){
    return $this->belongsTo(Campaign::class);
  }


}
