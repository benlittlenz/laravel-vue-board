<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('company_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->unsignedInteger('project_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone_number', 50);
            $table->string('mobile_number', 50);

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
        Schema::dropIfExists('job_contacts');
    }
}
