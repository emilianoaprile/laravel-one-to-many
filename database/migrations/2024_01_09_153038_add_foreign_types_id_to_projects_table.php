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
        Schema::table('projects', function (Blueprint $table) {
            // aggiungiamo campo type_id alla table projects
            $table->unsignedBigInteger('type_id')->nullable()->after('id');
             // aggiugniamo il vincolo della realzione
            $table->foreign('type_id') 
                  ->references('id')
                  ->on('types')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // rimuovere il vincolo della relazione

            // $table->dropForeign('projects_types_id_foreign');
            $table->dropForeign(['type_id']);

            // droppare la colonna category_id
            $table->dropColumn('type_id');
        });
    }
};
