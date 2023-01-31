<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeekDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week_days', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->timestamps();
        });
        DB::table('week_days')->insert([
            ['id'=>1,'title' => 'Sunday'],
            ['id'=>2,'title' => 'Monday'],
            ['id'=>3,'title' => 'Tuesday'],
            ['id'=>4,'title' => 'Wednesday'],
            ['id'=>5,'title' => 'Thursday'],
            ['id'=>6,'title' => 'Friday'],
            ['id'=>7,'title' => 'Saturday'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('week_days');
    }
}
