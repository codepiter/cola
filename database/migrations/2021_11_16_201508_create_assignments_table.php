<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
			
			$table->foreignId('customer_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade')->on('customers');
			
			$table->foreignId('queue_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade')->on('queues');
			$table->string('status', 16)->nullable();
			
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
        Schema::dropIfExists('assignments');
    }
}
