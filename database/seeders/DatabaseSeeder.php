<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      Permission::create(['name' => 'send_sms']);

      $user = new User([
        'first_name' => 'Test',
        'last_name' => 'Test',
        'email' => 'Test1@test.com',
        'email_verified_at' => now(),
        'password' => Hash::make('123456'),
      ]);
      $user->save();

      $user->givePermissionTo('send_sms');

    }
}
