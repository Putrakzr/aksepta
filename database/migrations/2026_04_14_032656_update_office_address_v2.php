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
        \Illuminate\Support\Facades\DB::table('site_contents')->updateOrInsert(
            ['key' => 'contact_address'],
            ['value' => 'Jl. Aminah Syukur No. 2B<br>Samarinda, Kalimantan Timur']
        );
        \Illuminate\Support\Facades\Cache::flush();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
