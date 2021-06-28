<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSMSTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sms', function (Blueprint $table) {
      $table->id();

      $table->foreignId('user_id')->nullable();
      $table->foreignId('lead_id')->nullable();

      $table->string('phone_lead_outgoing')->nullable();
      $table->string('phone_lead_incoming')->nullable();
      $table->string('phone_twilio')->nullable();

      $table->text('message')->nullable();
      $table->string('carrier_response')->nullable();

      $table->boolean('unread')->default(true);
      $table->boolean('archived')->default(false);

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
    Schema::dropIfExists('sms');
  }
}
