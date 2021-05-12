<?php

namespace Database\Seeders;

use App\Models\Diary;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diaries')->delete();
        Diary::factory()->count(5)->create();
    }
}
