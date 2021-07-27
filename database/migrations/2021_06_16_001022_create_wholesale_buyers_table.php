<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWholesaleBuyersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('wholesale_buyers', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users');

      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->string('email')->nullable();
      $table->string('phone_1')->nullable();
      $table->string('phone_1_type')->nullable();
      $table->string('phone_2')->nullable();
      $table->string('phone_2_type')->nullable();
      $table->string('address')->nullable();

      $table->unsignedBigInteger('price_min')->nullable();
      $table->unsignedBigInteger('price_max')->nullable();
      $table->boolean('any_price')->default(false);

      $table->text('zip_codes_wanted')->nullable();
      $table->boolean('any_area')->default(false);

      $table->boolean('residential')->default(false);
      $table->boolean('commercial')->default(false);
      $table->boolean('multi_unit')->default(false);
      $table->boolean('vacant_land')->default(false);
      $table->boolean('storage')->default(false);

      $table->unsignedInteger('min_bedrooms')->default(0);
      $table->unsignedInteger('min_bathrooms')->default(0);
      $table->unsignedInteger('min_sqft')->default(0);

      $table->unsignedInteger('min_build_year')->nullable();
      $table->boolean('needs_rehab')->default(false);
      $table->boolean('rental')->default(false);
      $table->boolean('flip')->default(false);

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
    Schema::dropIfExists('wholesale_buyers');
  }
}
