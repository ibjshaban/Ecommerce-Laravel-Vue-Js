<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMallProductsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
        Schema::enableForeignKeyConstraints();
		Schema::create('mall_products', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->unsignedBigInteger('product_id')->nullable();
				$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
				$table->unsignedBigInteger('mall_id')->nullable();
				$table->foreign('mall_id')->references('id')->on('malls')->onDelete('cascade');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('mall_products');
	}
}
