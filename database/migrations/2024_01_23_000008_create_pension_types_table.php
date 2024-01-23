<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensionTypesTable extends Migration
{
    public function up()
    {
        Schema::create('pension_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_name')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
