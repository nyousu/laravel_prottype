<?php

use Illuminate\Database\Seeder;

class CosmeinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cosmeinfo::class,3)->create();
    }
}
