<?php

namespace Database\Seeders;

use App\Models\LeadGradeTemplate;
use Illuminate\Database\Seeder;

class LeadGradeTemplateSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $temp = new LeadGradeTemplate;
    $temp->name = 'Cold Lead';
    $temp->class = 'cold-lead';
    $temp->save();

    $temp = new LeadGradeTemplate;
    $temp->name = 'Warm Lead';
    $temp->class = 'warm-lead';
    $temp->save();

    $temp = new LeadGradeTemplate;
    $temp->name = 'Hot Lead';
    $temp->class = 'hot-lead';
    $temp->save();
  }
}
