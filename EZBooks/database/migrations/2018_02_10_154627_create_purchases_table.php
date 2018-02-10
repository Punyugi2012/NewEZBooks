<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price')->default(0.0);
            $table->integer('member_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->foreign('member_id')
                    ->references('id')
                    ->on('members')
                    ->onDelete('cascade');
            $table->foreign('book_id')
                    ->references('id')
                    ->on('books')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('purchases');
    }
}
