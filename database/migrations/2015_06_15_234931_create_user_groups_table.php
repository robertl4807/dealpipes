<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_groups', function (Blueprint $table) {
      $table->id();
      $table->foreignId('owner_id')->constrained('users');
      $table->foreignId('team_member_id')->constrained('users');

      //for round robbin'ing
      $table->unsignedBigInteger('last_team_member_id')->nullable();

      $table->string('name');

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
    Schema::dropIfExists('user_groups');
  }
}
