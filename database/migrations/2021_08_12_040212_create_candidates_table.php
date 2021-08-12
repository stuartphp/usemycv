<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('first_name');
            $table->string('surname');
            $table->string('title', 15);
            $table->unsignedTinyInteger('gender')->nullable();
            $table->string('image')->nullable();
            $table->unsignedTinyInteger('ethnicity');
            $table->string('phone_number', 30);
            $table->boolean('citizenship')->default(1);
            $table->string('sa_id', 13)->nullable();
            $table->date('date_of_birth');
            $table->boolean('willing_to_relocate')->default(0);
            $table->unsignedInteger('current_city');
            $table->boolean('is_disabled');
            $table->text('disabled_note');
            $table->string('highest_qualification');
            $table->boolean('allow_view')->default(1);
            $table->string('introduction');
            $table->unsignedInteger('desired_job_location');
            $table->string('desired_job_title');
            $table->unsignedInteger('desired_job_category_id');
            $table->unsignedInteger('current_salary');
            $table->boolean('job_type')->nullable(); // Contract or Permanent
            $table->unsignedTinyInteger('notice_period')->default(1);
            $table->boolean('is_available')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
