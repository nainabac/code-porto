<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First, rename the old column
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('category', 'category_old');
        });

        // Add the new json column
        Schema::table('projects', function (Blueprint $table) {
            $table->json('category')->nullable();
        });

        // Migrate data
        $projects = DB::table('projects')->get();
        foreach ($projects as $project) {
            $categories = [$project->category_old];
            DB::table('projects')
                ->where('id', $project->id)
                ->update(['category' => json_encode($categories)]);
        }

        // Drop the old column
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('category_old');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('category_string')->nullable();
        });

        $projects = DB::table('projects')->get();
        foreach ($projects as $project) {
            $categories = json_decode($project->category, true);
            $mainCategory = is_array($categories) && count($categories) > 0 ? $categories[0] : 'data';
            DB::table('projects')
                ->where('id', $project->id)
                ->update(['category_string' => $mainCategory]);
        }

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('category');
            $table->renameColumn('category_string', 'category');
        });
    }
};
