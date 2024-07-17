<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('phone');
            $table->string('address');
            $table->string('geolocation');
            $table->string('role');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        $password = Hash::make('admin123'); // Hash the password

        DB::table('users')->insert([
            'name' => 'Admin User',
            'gender' => 'male',
            'age' => 30,
            'phone' => '123-456-7890',
            'address' => '123 Admin St, Anytown, USA',
            'geolocation' => '40.7128,-74.0060',
            'role' => 'admin',
            'email' => 'admin@example.com',
            'password' => $password,
            'created_at' => now(),
            'updated_at' => now(),
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
};