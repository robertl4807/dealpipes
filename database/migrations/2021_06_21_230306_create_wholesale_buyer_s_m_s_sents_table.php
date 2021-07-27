<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWholesaleBuyerSMSSentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('wholesale_buyer_sms_sents', function (Blueprint $table) {
      $table->id();
      $table->string('message_id')->unique();

      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('wholesale_buyer_id')->constrained('wholesale_buyers');

      $table->foreignId('lead_id')->nullable()->constrained('leads');

      $table->string('phone');
      $table->text('body');
      $table->string('status');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('wholesale_buyer_sms_sents');
  }
}
