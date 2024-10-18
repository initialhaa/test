<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskEventsTable extends Migration
{
    public function up()
    {
        Schema::create('risk_events', function (Blueprint $table) {
            $table->string('name');
            $table->uuid()->primary();
            $table->string('bulan_pelaporan')->nullable();
            $table->string('quarter')->nullable();
            $table->date('tanggal_keadaan')->nullable();
            $table->date('tanggal_ditemukan')->nullable();
            $table->text('deskripsi_keadaan')->nullable();
            $table->text('deskripsi_penyebab')->nullable();
            $table->json('terkena_dampak')->nullable();
            $table->string('kerugian_financial')->nullable();
            $table->string('potensial_kerugian_financial')->nullable();
            $table->string('status')->nullable();
            $table->text('kerugian_non_financial')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('risk_events');
    }
}
