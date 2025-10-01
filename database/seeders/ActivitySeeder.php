<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'name' => 'Activity 1',
            'description' => 'Description for Activity 1',
            'when' => '2025-10-01',
            'status' => 'pending',
        ]);

        Activity::create([
            'name' => 'Activity 2',
            'description' => 'Description for Activity 2',
            'when' => '2025-10-02',
            'status' => 'completed',
        ]);

        Activity::create([
            'name' => 'Activity 3',
            'description' => 'Description for Activity 3',
            'when' => '2025-10-03',
            'status' => 'pending',
        ]);
    }
}
