<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_transaction_details_users')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('transaction_id', 'fk_transaction_details_transactions')->references('id')->on('transactions')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id', 'fk_transaction_details_products')->references('id')->on('products')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->dropForeign('fk_transaction_details_users');
            $table->dropForeign('fk_transaction_details_transactions');
            $table->dropForeign('fk_transaction_details_products');
        });
    }
};
