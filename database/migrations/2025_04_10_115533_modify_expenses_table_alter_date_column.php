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

        Schema::table('expenses', function (Blueprint $table) {
            $table->renameColumn('date', 'spent_at');
        });

        Schema::table('expenses', function (Blueprint $table) {
            $table->dateTime('spent_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable()->change();
        });

        DB::table('expenses')->whereNotNull('spent_at')
            ->update(['spent_at' => DB::raw("CONCAT(DATE(spent_at), ' 18:30:00')")]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->date('date')->change();
        });
    }
};
