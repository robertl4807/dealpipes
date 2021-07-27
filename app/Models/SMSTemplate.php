<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMSTemplate extends Model
{
  use HasFactory;

  protected $guarded = ['id'];
  public $table = 'sms_templates';

  public function user(){
    return $this->belongsTo(User::class);
  }

}
