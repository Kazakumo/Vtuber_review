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
        Schema::create('vtubers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('summary', 400);
            $table->string('body', 200);
            $table->string('image');//画像はカリキュラム補足参照、cloud9を使わないで外部ストレージに保存したい。
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
        Schema::dropIfExists('vtubers');
    }
};
