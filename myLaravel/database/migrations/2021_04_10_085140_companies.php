<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('company_id',);
            $table->string('company_name',55);
            $table->string('company_web',255);
            $table->string('company_address',500);
            $table->string('company_code',55);
            $table->string('company_phone',55);
        });
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
