<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new Category();
        $a->title = 'PYTHON';
        $a->save();
    }
}
