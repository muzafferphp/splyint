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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
			$table->tinyInteger('collection_id');
			$table->string('pallet_category')->nullable();
			$table->tinyInteger('action_perchese')->nullable();
			$table->string('which_website')->nullable();
			$table->string('content_pallet')->nullable();
			$table->string('whate_need_moving')->nullable();
			$table->string('pallet_size')->nullable();
			$table->tinyInteger('quantity')->nullable();
			$table->tinyInteger('unsure_weight')->nullable();
			$table->string('height_per_pallet')->nullable();
			$table->string('weight_per_pallet')->nullable();
			$table->string('pallet_cm')->nullable();
			$table->string('length_per_items')->nullable();
			$table->string('width_per_items')->nullable();
			$table->string('heigh_per_items')->nullable();
			$table->string('package_cm1')->nullable();
			$table->string('package_cm2')->nullable();
			$table->string('package_cm3')->nullable();
			$table->string('toncm')->nullable();
			$table->string('total_cubic_meter')->nullable();
			$table->string('dangerousgoods')->nullable();
			$table->string('class_dg')->nullable();
			$table->string('required_tailgate')->nullable();
			$table->tinyInteger('items_secure')->nullable();
			$table->tinyInteger('more_details')->nullable();
			$table->string('more_details_content')->nullable();
			$table->string('take_photo')->nullable();
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
        Schema::dropIfExists('quotes');
    }
};
