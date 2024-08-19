<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiRapotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_rapot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pendaftaran_id')->unsigned();
            $table->decimal('bahasa_indonesia', 5, 2);
            $table->decimal('bahasa_inggris', 5, 2);
            $table->decimal('mtk', 5, 2);
            $table->decimal('ipa', 5, 2);
            $table->decimal('total_rata2', 5, 2);
            $table->timestamps();

            $table->foreign('pendaftaran_id')->references('id')->on('pendaftaran')
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
        Schema::dropIfExists('nilai_rapot');
    }
}
