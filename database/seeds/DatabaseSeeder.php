<?php

use Illuminate\Database\Seeder;

use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(Movie::class)->times(10)->create();
    }
}
