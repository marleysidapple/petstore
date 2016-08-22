<?php

use Illuminate\Database\Seeder;

class RetailerContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RetailerContact::class, 10)->create();
    }
}
