<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data.
        // User::truncate();

        //faker
        // $faker = Faker\Factory::create('ja_JP');

        //insert
        factory(\App\User::class, 2)
        ->create()
        ->each(function ($user) {
            factory(\App\Cosmeinfo::class, 2)
                ->make()
                ->each(function ($cosmeinfo) use ($user) {
                    $user->cosmeinfo()->save($cosmeinfo);
                });
        });
        // for($i=0;$i<25;$i++)
        // {
        //     $user = User::create();

        //     $user->name = $faker->userName();
        //     $user->email = $faker->unique()->email();
        //     $user->password = Hash::make($user->email); //パスワードはとりあえずemailをハッシュ化。

        //     $user->save();

        // }
    }
}

?>
