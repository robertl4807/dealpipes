<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyDetailsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('property_details', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('lead_id')->constrained('lead');

      $table->string('property_street')->nullable();
      $table->string('property_city')->nullable();
      $table->string('property_state')->nullable();
      $table->string('property_zip_code')->nullable();

      $table->string('owner_name')->nullable();
      $table->string('owner_type')->nullable();

      $table->string('owner_mailing_address')->nullable();

      $table->string('phone_1')->nullable();
      $table->string('phone_2')->nullable();
      $table->string('phone_3')->nullable();

      $table->string('email_1')->nullable();
      $table->string('email_2')->nullable();
      $table->string('email_3')->nullable();

      $table->string('sale_price_1')->nullable();
      $table->string('sale_date_1')->nullable();
      $table->string('sale_price_2')->nullable();
      $table->string('sale_date_2')->nullable();
      $table->string('sale_price_3')->nullable();
      $table->string('sale_date_3')->nullable();

      $table->string('total_assessed_value')->nullable();
      $table->string('land_value')->nullable();

      $table->string('mortgage_amount')->nullable();
      $table->string('mortgage_date')->nullable();
      $table->string('mortgage_term')->nullable();
      $table->string('equity_percent')->nullable();
      $table->string('lender_name')->nullable();
      $table->string('mortgage_due_date')->nullable();

      $table->string('second_mortgage_amount')->nullable();
      $table->string('school_district')->nullable();
      $table->string('parcel_id')->nullable();
      $table->string('building_sqft')->nullable();
      $table->string('lot_acreage')->nullable();
      $table->string('bedrooms')->nullable();
      $table->string('bathrooms')->nullable();
      $table->string('year_built')->nullable();

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
    Schema::dropIfExists('property_details');
  }
}
