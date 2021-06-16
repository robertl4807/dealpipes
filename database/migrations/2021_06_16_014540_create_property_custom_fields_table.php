<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyCustomFieldsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('property_custom_fields', function (Blueprint $table) {
      $table->id();

      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('property_details_id')->constrained('property_details');

      $table->string('key');
      $table->text('value')->nullable();

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
    Schema::dropIfExists('property_custom_fields');
  }
}
