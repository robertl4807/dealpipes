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

  public function leads(){
    return $this->hasMany(Lead::class);
  }

  public function notes(){
    return $this->hasMany(Note::class);
  }

  public function campaigns(){
    return $this->hasMany(Campaign::class);
  }

  public function automations(){
    return $this->hasMany(Automation::class);
  }

  public function cannedMessages(){
    return $this->hasMany(CannedMessages::class);
  }

  public function tags(){
    return $this->hasMany(Tag::class);
  }

  public function wholesaleBuyers(){
    return $this->hasMany(WholesaleBuyer::class);
  }

  public function leadGrades(){
    return $this->hasMany(LeadGrade::class);
  }

  public function leadCustomFields(){
    return $this->hasMany(LeadCustomField::class);
  }

  public function taskTemplates(){
    return $this->hasMany(TaskTemplate::class);
  }

  public function userSettings(){
    return $this->hasMany(UserSettings::class);
  }

  public function emailTemplates(){
    return $this->hasMany(EmailTemplate::class);
  }

  public function smsTemplates(){
    return $this->hasMany(SMSTemplate::class);
  }

  public function skipTraces(){
    return $this->hasMany(SkipTrace::class);
  }

  public function propertyDetails(){
    return $this->hasMany(PropertyDetails::class);
  }

  public function propertyCustomFields(){
    return $this->hasMany(PropertyCustomField::class);
  }


  public function isActive(){
    return $this->attributes['active'];
  }

  public function isMainUser(){
    return is_null($this->attributes['owner_id']);
  }

}
