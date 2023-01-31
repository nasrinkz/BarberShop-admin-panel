<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('phoneNumber')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->unique();
            $table->string('userName')->unique();
            $table->integer('gender')->default(0);
            $table->integer('status')->default(0);
            $table->integer('groupId')->default(0);
            $table->integer('barberShopId')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            ['id'=>1,'firstName' => 'Name', 'lastName' => 'Family','email'=>'admin@gmail.com','userName'=>'admin@gmail.com','status'=>1,'groupId'=>1,'password'=>Hash::make('admin')],
            ['id'=>2, 'firstName' => 'Name', 'lastName' => 'Family','email'=>'customer@gmail.com','userName'=>'customer@gmail.com','status'=>1,'groupId'=>2,'password'=>Hash::make('customer')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
