<?php

namespace Database\Seeders;

use App\Models\TableList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableLists = TableList::all();

        foreach ($tableLists as $table) {
            DB::table('table_rules')->insert([
                'role_id' => '1',
                'table_list_id' => $table->id, 
                'view' => '1', 
                'add' => '1', 
                'edit' => '1', 
                'import' => '1', 
                'soft_delete' => '1', 
                'hard_delete' => '1', 
                'add_by' => 'superuser', 
                'updated_by' => 'superuser'
            ]);
        }
        foreach ($tableLists as $table) {
            DB::table('table_rules')->insert([
                'role_id' => '2',
                'table_list_id' => $table->id, 
                'view' => '0', 
                'add' => '0', 
                'edit' => '0', 
                'import' => '0', 
                'soft_delete' => '0', 
                'hard_delete' => '0', 
                'add_by' => 'superuser', 
                'updated_by' => 'superuser'
            ]);
        }
        foreach ($tableLists as $table) {
            DB::table('table_rules')->insert([
                'role_id' => '3',
                'table_list_id' => $table->id, 
                'view' => '0', 
                'add' => '0', 
                'edit' => '0', 
                'import' => '0', 
                'soft_delete' => '0', 
                'hard_delete' => '0', 
                'add_by' => 'superuser', 
                'updated_by' => 'superuser'
            ]);
        }

    }
}
