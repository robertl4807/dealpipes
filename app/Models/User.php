<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
  use HasFactory, Notifiable, Billable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $guarded = ['id'];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'active' => 'boolean',
  ];

  public function tasks(){
    return $this->hasMany(Task::class);
  }

  public function actions(){
    return $this->hasMany(UserAction::class);
  }

  public function owner(){
    return $this->hasOne(User::class, 'owner_id');
  }


  public function isActive(){
    return $this->attributes['active'];
  }

  public function isMainUser(){
    return is_null($this->attributes['owner_id']);
  }

}
