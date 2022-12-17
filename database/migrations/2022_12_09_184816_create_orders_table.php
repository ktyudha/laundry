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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_hp');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('paket_id')->constrained();
            $table->enum('status', ['queue', 'proccess', 'finish'])->default('queue');
            $table->unsignedInteger('jumlah')->default(3);
            $table->unsignedBigInteger('sumofprice');
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
        Schema::dropIfExists('orders');
    }
};
