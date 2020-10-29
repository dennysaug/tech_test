<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruncateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE notes');
        DB::statement('TRUNCATE contacts');
        DB::statement('TRUNCATE companies');
        DB::statement('TRUNCATE users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
