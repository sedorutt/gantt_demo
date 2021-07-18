<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'id' => 1, 'text' => 'テストプロジェクト', 'start_date' => '2020-08-01 00:00:00',
                'duration' => 5, 'progress' => 0.8, 'parent' => 0
            ],
            [
                'id' => 2, 'text' => 'テストタスク', 'start_date' => '2020-08-06 00:00:00',
                'duration' => 4, 'progress' => 0.5, 'parent' => 1
            ],
            [
                'id' => 3, 'text' => 'テストタスク - 2', 'start_date' => '2020-08-05 00:00:00',
                'duration' => 6, 'progress' => 0.7, 'parent' => 1
            ],
            [
                'id' => 4, 'text' => 'テストタスク - 3', 'start_date' => '2020-08-07 00:00:00',
                'duration' => 2, 'progress' => 0, 'parent' => 1
            ],
            [
                'id' => 5, 'text' => 'テストタスク - 1.1', 'start_date' => '2020-08-05 00:00:00',
                'duration' => 5, 'progress' => 0.34, 'parent' => 2
            ],
            [
                'id' => 6, 'text' => 'テストタスク - 1.2', 'start_date' => '2020-08-11 00:00:00',
                'duration' => 4, 'progress' => 0.5, 'parent' => 2
            ],
            [
                'id' => 7, 'text' => 'テストタスク - 2.1', 'start_date' => '2020-08-07 00:00:00',
                'duration' => 5, 'progress' => 0.2, 'parent' => 3
            ],
            [
                'id' => 8, 'text' => 'テストタスク - 2.2', 'start_date' => '2020-08-06 00:00:00',
                'duration' => 4, 'progress' => 0.9, 'parent' => 3
            ]
        ]);
    }
}
