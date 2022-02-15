<?php

use Illuminate\Database\Seeder;

use App\Postcard;

class PostcardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Postcard::class, 20) -> create();
    }
}
