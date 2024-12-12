<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthdaysTable extends Migration
{
    public function up()
    {
    Schema::create('birthdays', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->date('date_of_birth');
        $table->string('description');
        $table->softDeletes();
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('birthdays');
    }
}

