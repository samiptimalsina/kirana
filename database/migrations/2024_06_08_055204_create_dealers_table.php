<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_no')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('address')->nullable();
            $table->string('proprietor_name')->nullable();
            $table->string('google_address')->nullable();
            $table->string('google_map')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php artisan make:model Team

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealers');
    }
}
