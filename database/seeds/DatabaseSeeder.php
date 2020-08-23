<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        factory(App\Contact::class, 15)->create();
        factory(App\Product::class, 5)->create();
        factory(App\Note::class, 15)->create();
    }
}
