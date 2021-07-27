<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('automations', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users');

      $table->foreignId('campaign_id')->nullable()->constrained('campaigns');
      $table->foreignId('lead_id')->nullable()->constrained('leads');
      $table->foreignId('user_group_id')->nullable()->constrained('users');




      $table->string('action');


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
    Schema::dropIfExists('automations');
  }
}
