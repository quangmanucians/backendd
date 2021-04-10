<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Trainer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0; $i <=1000000; $i++)
        {
            DB::table('companies') -> insert(
            [
            'trainer_id'=>'123',
            'trainer_name'=>'addd',
            'company_id'=>'123',
            'trainer_email' =>'bbb',
            'trainer_phone' =>'1123']
            );
        }
    }
}
