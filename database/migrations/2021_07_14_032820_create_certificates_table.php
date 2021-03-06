<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('nama');
            $table->string('nim');
            $table->string('tipe');
            $table->string('event');
            $table->string('pembicara');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->foreignId('design_certificate_id');
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
        Schema::dropIfExists('certificates');
    }
}
