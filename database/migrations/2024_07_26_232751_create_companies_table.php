<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("logo");
            $table->timestamps();
        });

        \DB::table('companies')->insert([
            [
                'name' => 'Gol Linhas Aéreas',
                'logo' => 'https://www.voegol.com.br/themes/custom/voegol/images/logos/logo-gol.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LATAM Airlines',
                'logo' => 'https://s3-symbol-logo.tradingview.com/latam-airlines--600.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Azul Linhas Aéreas',
                'logo' => 'https://www.voeazul.com.br/images/logos/logo-azul.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Passaredo Linhas Aéreas',
                'logo' => 'https://www.passaredo.com.br/images/logo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Avianca Brasil',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/e/ec/Avianca_Logo_2013.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
