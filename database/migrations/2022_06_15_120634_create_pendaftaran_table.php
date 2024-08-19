<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nama_siswa');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('foto');
            $table->string('foto_akte');
            $table->string('agama');
            $table->text('alamat');
            $table->string('nohp')->nullable();
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nohp_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nohp_ibu')->nullable();
            $table->string('asal_sekolah');
            $table->string('foto_rapot');
            $table->string('foto_ijazah');
            $table->string('status_pendaftaran')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
