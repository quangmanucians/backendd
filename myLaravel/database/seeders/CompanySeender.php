<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeender extends Seeder
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
            'company_name'=>'abcd',
            'company_web'=>'addd',
            'company_address'=>'acd',
            'company_code' =>'bbb',
            'company_phone' =>'1123']
            );
        }
    }
}
