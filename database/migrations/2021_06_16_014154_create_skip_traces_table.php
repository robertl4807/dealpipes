<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkipTracesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('skip_traces', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('lead_id')->constrained('leads');
      
      $table->string('traced_first_name')->nullable();
      $table->string('traced_middle_name')->nullable();
      $table->string('traced_last_name')->nullable();
      $table->string('traced_name_suffix')->nullable(); 
      $table->string('traced_phone')->nullable();
      $table->string('traced_email')->nullable();
      
      //for if tracing a related party of another traced name
      $table->boolean('secondary_trace')->default(false);

      //for if we do validation
      $table->boolean('email_validated')->default(false);
      
      $table->string('result_first_name')->nullable();
      $table->string('result_middle_name')->nullable();
      $table->string('result_last_name')->nullable();
      $table->string('result_name_suffix')->nullable(); 
      
      $table->string('result_phone1')->nullable();
      $table->string('result_phone2')->nullable();
      $table->string('result_phone3')->nullable();
      $table->string('result_phone4')->nullable();
      
      $table->string('result_email1')->nullable();
      $table->string('result_email2')->nullable();
      $table->string('result_email3')->nullable();
      $table->string('result_email4')->nullable();
      
      $table->string('result_address1')->nullable();
      $table->string('result_city1')->nullable();
      $table->string('result_state1')->nullable();
      $table->string('result_zip1')->nullable();
      
      $table->string('result_address2')->nullable();
      $table->string('result_city2')->nullable();
      $table->string('result_state2')->nullable();
      $table->string('result_zip2')->nullable();
      
      $table->string('result_address3')->nullable();
      $table->string('result_city3')->nullable();
      $table->string('result_state3')->nullable();
      $table->string('result_zip3')->nullable();
      
      $table->string('result_address4')->nullable();
      $table->string('result_city4')->nullable();
      $table->string('result_state4')->nullable();
      $table->string('result_zip4')->nullable();

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
    Schema::dropIfExists('skip_traces');
  }
}
