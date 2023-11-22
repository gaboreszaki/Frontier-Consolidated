<?php

namespace Database\Seeders;

use App\Models\AfterEventReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AfterEventReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AfterEventReport::factory()->count(5)->create();
    }
}
