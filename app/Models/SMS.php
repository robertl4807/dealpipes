<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
  use HasFactory;

  protected $guarded = ['id'];
  public $table = 'sms';

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function lead(){
    return $this->belongsTo(Lead::class);
  }

}
