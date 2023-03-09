<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('detail_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('address');
            // $table->string('nomor_tlp');
            // $table->date('ttl');
            // $table->string('foto');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_profile');
    }
};
