<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('job_title');
            $table->string('company_name');
            $table->date('start');
            $table->date('end')->nullable();
            $table->boolean('is_current')->nullable();
            $table->unsignedTinyInteger('industry_id')->default(0);
            $table->unsignedInteger('job_category_id')->default(0);
            $table->unsignedInteger('job_sub_category')->default(0);
            $table->text('responsibilities');
            $table->string('reason_for_leaving');
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
        Schema::dropIfExists('candidate_work_experiences');
    }
}
