<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title')->nullable();
            $table->string('level')->nullable();
            $table->integer('status')->nullable();
            $table->integer('barberShopId')->nullable()->default(1);
            $table->timestamps();
        });
        DB::table('user_groups')->insert([
            ['id'=>1,'title' => 'Admin', 'level' => 1,'status'=>1],
            ['id'=>2,'title' => 'Customer', 'level' => 2,'status'=>1],
            ['id'=>3,'title' => 'Barber', 'level' => 3,'status'=>1],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_groups');
    }
}
