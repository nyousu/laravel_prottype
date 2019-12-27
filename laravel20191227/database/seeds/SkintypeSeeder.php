<?php

use Illuminate\Database\Seeder;

class SkintypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skintypes = [
            '普通肌',
            '乾燥肌',
            '脂性肌',
            '混合肌',
            '敏感肌',
        ];

        foreach ($skintypes as $skintype) {
            DB::table('skintypes')->insert([
                'name' => $skintype,
            ]);
        }


        //
    }
}
