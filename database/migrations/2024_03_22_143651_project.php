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
        Schema::create('project', function (Blueprint $table) {
            $table->id('id_project');
            $table->string('nama_client');
            $table->string('email_client');
            $table->string('no_telp');
            $table->text('alamat')->nullable();
            $table->string('nama_bisnis');
            $table->string('deskripsi_proyek');
            $table->string('jenis_proyek');
            $table->text('ide_desain')->nullable();
            $table->text('kebutuhan_fungsional')->nullable();
            $table->string('target_utama');
            $table->string('tujuan_utama');
            $table->string('anggaran');
            $table->date('deadline')->nullable();
            $table->string('referensi')->nullable();
            $table->text('catatan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
};
