<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Degrees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->bigIncrements('degree_id');
            $table->string('degree_name')->nullable();
            $table->unsignedBigInteger('semester_id')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('school_id');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->unsignedBigInteger('student_fee_id')->nullable(); // student_fee_id
            // $table->foreign('student_fee_id')->references('student_fee_id')->on('student_fees')->onDelete('cascade');

            // $table->foreign('student_fee_id')->references('student_fee_id')->on('student_fees');
            // ->onDelete('cascade');

            // $table->unsignedBigInteger('transaction_id')->nullable(); // transaction_id
            // $table->foreign('transaction_id')->references('transaction_id')->on('transactions')->onDelete('cascade');
            // $table->foreign('transaction_id')->references('transaction_id')->on('transactions');
            // ->onDelete('cascade');

            // $table->unsignedBigInteger('invoice_id')->nullable(); // invoice_id
            // $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            // $table->foreign('invoice_id')->references('id')->on('invoices');
            // ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degrees');
    }
}

