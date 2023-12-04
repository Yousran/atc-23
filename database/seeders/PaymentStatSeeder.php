<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_stats')->insert(
            ['payment_stat_name' => 'paid','add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['payment_stat_name' => 'gradually','add_by' => 'superuser',
            'updated_by' => 'superuser',],
            ['payment_stat_name' => 'unpaid','add_by' => 'superuser',
            'updated_by' => 'superuser',],
        );
    }
}
