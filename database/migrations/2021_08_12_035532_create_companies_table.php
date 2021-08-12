<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('trading_name');
            $table->string('registered_as');
            $table->string('registration_number', 50)->nullable();
            $table->string('vat_number', 50)->nullable();
            $table->string('contact_name');
            $table->string('contact_number');
            $table->string('email');
            $table->text('physical_address');
            $table->text('postal_address');
            $table->string('slogan')->nullable();
            $table->string('logo')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
