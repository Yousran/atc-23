<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoleSeeder::class,
            TableListSeeder::class,
            TableRuleSeeder::class,
            ElementRuleSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
            GenderSeeder::class,
            EducationSeeder::class,
            JobSeeder::class,
            ReligionSeeder::class,
            PaymentStatSeeder::class,
            DataSeeder::class,
            CourseSeeder::class,
            GroupSeeder::class,
        ]);
    }
}
