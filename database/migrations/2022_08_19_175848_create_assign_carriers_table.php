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
        Schema::create('assign_carriers', function (Blueprint $table) {
            $table->id();
			$table->tinyInteger('collection_id');
			$table->string('collection_from')->nullable();
			$table->string('collection_to')->nullable();
			$table->string('budget');
			$table->string('collect_address')->nullable();
			$table->string('delivery_address')->nullable();
			$table->tinyInteger('carrier_id');
			$table->string('carrier_name')->nullable();
			$table->string('carrier_email');
			$table->string('carrier_moble')->nullable();
			$table->string('carrier_address')->nullable();
			$table->string('status')->default('0');
			
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
        Schema::dropIfExists('assign_carriers');
    }
};
