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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
			$table->tinyInteger('user_id');
			$table->string('user_email')
			$table->string('collection_address')->nullable();
			$table->string('delivery_address')->nullable();
			$table->string('collection')->nullable();
			$table->string('delivery')->nullable();
			$table->string('iam')->nullable();
			$table->string('load_location')->nullable();
			$table->string('unload_location')->nullable();
			$table->string('collection_from')->format('d-m-Y')->nullable();
			$table->string('collection_to')->format('d-m-Y')->nullable();
			$table->string('delivery_from')->format('d-m-Y')->nullable();
			$table->string('delivery_to')->format('d-m-Y')->nullable();
			$table->string('expiry_date')->format('d-m-Y')->nullable();
			$table->string('budget')->nullable();
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
        Schema::dropIfExists('collections');
    }
};
