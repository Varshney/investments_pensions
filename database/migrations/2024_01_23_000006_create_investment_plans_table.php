<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentPlansTable extends Migration
{
    public function up()
    {
        Schema::create('investment_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plan_name');
            $table->string('currency');
            $table->decimal('invested', 15, 2);
            $table->string('plan_length');
            $table->float('percentage', 4, 2);
            $table->float('second_percentage', 4, 2)->nullable();
            $table->string('second_percentage_start')->nullable();
            $table->boolean('income_based')->default(0)->nullable();
            $table->boolean('compounded')->default(0)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('maturity_date')->nullable();
            $table->float('ftse_100_start', 7, 2)->nullable();
            $table->float('ftse_100_end', 7, 2)->nullable();
            $table->float('snp_500_start', 7, 2)->nullable();
            $table->float('snp_500_end', 7, 2)->nullable();
            $table->float('stoxx_50_start', 7, 2)->nullable();
            $table->float('stoxx_50_end', 7, 2)->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
