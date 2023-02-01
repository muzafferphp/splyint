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
        Schema::create('quote_notifications', function (Blueprint $table) {
            $table->id();
			$table->tinyInteger('collection_id')->nullable();
			$table->string('collection_address')->nullable();
			$table->string('delivery_address')->nullable();
			$table->string('budget')->nullable();
			$table->tinyInteger('user_id')->nullable();
			$table->string('user_name')->nullable();
			$table->string('user_email')->nullable();
			$table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('quote_notifications');
    }
};
