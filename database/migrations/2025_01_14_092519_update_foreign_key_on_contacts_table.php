<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeyOnContactsTable extends Migration
{
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Drop the old foreign key
            $table->dropForeign(['student_id']);
            
            // Add the new foreign key referencing the correct table (`my_table`)
            $table->foreign('student_id')->references('id')->on('my_table')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Drop the new foreign key
            $table->dropForeign(['student_id']);
            
            // Optionally, you can re-add the old foreign key if needed
            // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }
}
