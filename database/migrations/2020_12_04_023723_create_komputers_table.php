<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komputer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_fa', 10);
            $table->string('p_merk', 50);
            $table->string('p_jenis', 50);
            $table->string('p_tipe', 50);
            $table->string('p_kecepatan', 5);
            $table->string('m_merk', 50);
            $table->string('m_tipe', 50);
            $table->string('r_kapasitas', 5);
            $table->string('r_tipe', 5);
            $table->string('r_slot', 10);
            $table->string('hd1_merk', 50);
            $table->string('hd1_tipe', 50);
            $table->string('hd1_kapasitas', 5);
            $table->string('hd2_merk', 50);
            $table->string('hd2_tipe', 50);
            $table->string('hd2_kapasitas', 5);
            $table->string('vga_external', 50);
            $table->string('lan_nama', 50);
            $table->string('lan_mac', 100);
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
        Schema::dropIfExists('komputer');
    }
}
