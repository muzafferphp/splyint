<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
			$table->string('name');
            $table->string('email')->unique();
			$table->string('mobile');
            $table->string('password');
			$table->string('pic');
            $table->string('address');
            $table->string('lince_no');
            $table->string('insurance_no');
            $table->string('it_is_owned_corporate');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('gst_no');
            $table->string('type_of_truck');
            $table->string('attachment');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('carriers');
    }
};
