<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tall\Status\Models\Status::create([
            'name'=>'Draft'
        ]);
        \Tall\Status\Models\Status::create([
            'name'=>'Published'
        ]);
    }
}
