<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassOffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_offs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('offDate');
            $table->enum('oType', ['E', 'O', 'CP']);
            $table->string('description',500)->nullable();
            $table->smallInteger('status')->default(1);
            $table->unsignedBigInteger('school_id')->nullable();
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
        Schema::dropIfExists('class_offs');
    }
}
