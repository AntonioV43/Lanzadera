<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // The date and people columns already exist
        // in the destinations table migration.
    }

    public function down(): void
    {
        // Nothing to reverse.
    }
};