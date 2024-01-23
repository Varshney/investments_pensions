<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPensionTypesTable extends Migration
{
    public function up()
    {
        Schema::table('pension_types', function (Blueprint $table) {
            $table->unsignedBigInteger('pension_type_id')->nullable();
            $table->foreign('pension_type_id', 'pension_type_fk_9424643')->references('id')->on('pension_types');
        });
    }
}
