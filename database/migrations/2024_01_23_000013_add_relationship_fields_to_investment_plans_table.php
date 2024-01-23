<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInvestmentPlansTable extends Migration
{
    public function up()
    {
        Schema::table('investment_plans', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id', 'company_fk_9424027')->references('id')->on('contact_companies');
            $table->unsignedBigInteger('investment_type_id')->nullable();
            $table->foreign('investment_type_id', 'investment_type_fk_9424309')->references('id')->on('investment_types');
            $table->unsignedBigInteger('moved_from_plan_id')->nullable();
            $table->foreign('moved_from_plan_id', 'moved_from_plan_fk_9424982')->references('id')->on('investment_plans');
            $table->unsignedBigInteger('moved_from_plan_two_id')->nullable();
            $table->foreign('moved_from_plan_two_id', 'moved_from_plan_two_fk_9424983')->references('id')->on('investment_plans');
        });
    }
}
