<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkipTracePropertiesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('skip_trace_properties', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('lead_id')->constrained('leads');
      
      $table->string('attom_id')->nullable();

      $table->string('property_street')->nullable();
      $table->string('property_city')->nullable();
      $table->string('property_state')->nullable();
      $table->string('property_zip_code')->nullable();

      $table->string('owner1_name_first')->nullable();
      $table->string('owner1_name_middle')->nullable();
      $table->string('owner1_name_last')->nullable();
      $table->string('owner1_name_suffix')->nullable();
      
      $table->string('owner2_name_first')->nullable();
      $table->string('owner2_name_middle')->nullable();
      $table->string('owner2_name_last')->nullable();
      $table->string('owner2_name_suffix')->nullable();
      
      $table->string('owner3_name_first')->nullable();
      $table->string('owner3_name_middle')->nullable();
      $table->string('owner3_name_last')->nullable();
      $table->string('owner3_name_suffix')->nullable();
       
      $table->string('vacant')->nullable();
      $table->string('owner_occupied')->nullable();

      $table->string('parcel_id')->nullable();
      $table->string('county')->nullable();
      $table->string('tax_owner_name')->nullable();
      $table->string('tax_mailing_address')->nullable();
      $table->string('tax_mailing_city')->nullable();
      $table->string('tax_mailing_state')->nullable();
      $table->string('tax_mailing_zip')->nullable();
      $table->string('tax_year')->nullable();
      $table->string('tax_amount')->nullable();
      $table->string('tax_land_value')->nullable();
      $table->string('tax_improvement_value')->nullable();
      $table->string('tax_market_value')->nullable();

      $table->string('subdivision')->nullable();
      $table->string('legal_description')->nullable();

      $table->string('property_type')->nullable();
      $table->string('year_built')->nullable();
      $table->string('stories')->nullable();
      $table->string('bedrooms')->nullable();
      $table->string('baths')->nullable();
      $table->string('sqft')->nullable();
      $table->string('basement_sqft')->nullable();
      $table->string('assessor_sqft_total')->nullable();
      $table->string('lot_sqft')->nullable();
      $table->string('fireplaces')->nullable();
      $table->string('pool')->nullable();
      $table->string('heating')->nullable();
      $table->string('cooling')->nullable();
      $table->string('wall_type')->nullable();
      $table->string('roof_type')->nullable();

      $table->string('last_sale_date')->nullable();
      $table->string('last_sale_amount')->nullable();

      $table->string('mort1_recording_date')->nullable();
      $table->string('mort1_position')->nullable();
      $table->string('mort1_borrower')->nullable();
      $table->string('mort1_lender')->nullable();
      $table->string('mort1_description')->nullable();
      $table->string('mort1_term')->nullable();
      $table->string('mort1_amount')->nullable();

      $table->string('mort2_recording_date')->nullable();
      $table->string('mort2_position')->nullable();
      $table->string('mort2_borrower')->nullable();
      $table->string('mort2_lender')->nullable();
      $table->string('mort2_description')->nullable();
      $table->string('mort2_term')->nullable();
      $table->string('mort2_amount')->nullable();

      $table->string('mort3_recording_date')->nullable();
      $table->string('mort3_position')->nullable();
      $table->string('mort3_borrower')->nullable();
      $table->string('mort3_lender')->nullable();
      $table->string('mort3_description')->nullable();
      $table->string('mort3_term')->nullable();
      $table->string('mort3_amount')->nullable();

      $table->string('hist1_recording_date')->nullable();
      $table->string('hist1_saletransdate')->nullable();
      $table->string('hist1_salesearchdate')->nullable();
      $table->string('hist1_grantor')->nullable();
      $table->string('hist1_grantee')->nullable();
      $table->string('hist1_doc_type')->nullable();
      $table->string('hist1_sale_amount')->nullable();
      $table->string('hist1_saledisclosuretype')->nullable();
      $table->string('hist1_saledocnum')->nullable();
      $table->string('hist1_saletranstype')->nullable();
      $table->string('hist1_priceperbed')->nullable();
      $table->string('hist1_privepersizeunit')->nullable();
      
      $table->string('hist2_recording_date')->nullable();
      $table->string('hist2_saletransdate')->nullable();
      $table->string('hist2_salesearchdate')->nullable();
      $table->string('hist2_grantor')->nullable();
      $table->string('hist2_grantee')->nullable();
      $table->string('hist2_doc_type')->nullable();
      $table->string('hist2_sale_amount')->nullable();
      $table->string('hist2_saledisclosuretype')->nullable();
      $table->string('hist2_saledocnum')->nullable();
      $table->string('hist2_saletranstype')->nullable();
      $table->string('hist2_priceperbed')->nullable();
      $table->string('hist2_privepersizeunit')->nullable();

      $table->string('hist3_recording_date')->nullable();
      $table->string('hist3_saletransdate')->nullable();
      $table->string('hist3_salesearchdate')->nullable();
      $table->string('hist3_grantor')->nullable();
      $table->string('hist3_grantee')->nullable();
      $table->string('hist3_doc_type')->nullable();
      $table->string('hist3_sale_amount')->nullable();
      $table->string('hist3_saledisclosuretype')->nullable();
      $table->string('hist3_saledocnum')->nullable();
      $table->string('hist3_saletranstype')->nullable();
      $table->string('hist3_priceperbed')->nullable();
      $table->string('hist3_privepersizeunit')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('skip_trace_properties');
  }
}
