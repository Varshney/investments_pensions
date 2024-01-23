<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentTypesTable extends Migration
{
    public function up()
    {
        Schema::create('investment_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_name')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
