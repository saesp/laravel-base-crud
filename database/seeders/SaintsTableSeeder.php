<?php
// Seeder

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Modeks\Saints;

class SaintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saints = [

        ];

        foreach ($saints as $saint) {
            $newSaint = new Saints();
            $newSaint->first_name = ['first_name'];
            $newSaint->last_name = ['last_name'];
            $newSaint->blessing_date = ['blessing_date'];
            $newSaint->miracles_count = ['miracles_count'];
            $newSaint->save();
        }
    }
}