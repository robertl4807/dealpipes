<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWholesaleBuyerEmailSentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('wholesale_buyer_email_sents', function (Blueprint $table) {
      $table->id();
      $table->string('message_id')->unique();

      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('wholesale_buyer_id')->constrained('wholesale_buyers');

      $table->foreignId('lead_id')->nullable()->constrained('leads');

      $table->string('email');
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
    Schema::dropIfExists('wholesale_buyer_email_sents');
  }
}
