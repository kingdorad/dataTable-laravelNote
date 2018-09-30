<?php

use Illuminate\Database\Seeder;

class DataTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=\Faker\Factory::create('zh_TW');
        foreach (range(1,100) as $count){
        	# code...
        	\App\DataTable::create([
        	'name'=>$faker->name,
        	'phone'=>$faker->phoneNumber,
        	'address'=>$faker->address,
        	'birthday'=>\Carbon\Carbon::now()->addDays($count),

        	]);
        }
    }
}
