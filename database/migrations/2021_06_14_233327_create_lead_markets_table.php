<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadMarketsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('lead_markets', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users');

      $table->string('title');

      $table->string('city');
      $table->string('state');

      $table->string('class')->nullable();

      $table->text('zip_codes')->nullable();

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
    Schema::dropIfExists('lead_markets');
  }
}
