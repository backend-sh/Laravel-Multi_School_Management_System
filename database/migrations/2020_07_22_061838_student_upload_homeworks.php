<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentUploadHomeworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_upload_homeworks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class_code')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('file')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->unsignedBigInteger('semester_id')->nullable();
            $table->unsignedBigInteger('homework_id')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();

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
        Schema::dropIfExists('student_upload_homeworks');
    }
}
