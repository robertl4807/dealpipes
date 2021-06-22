<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WholesaleBuyerSMSSent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $table = 'wholesale_buyer_sms_sents';
}
