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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img',500)->nullable();
            $table->foreignIdFor(App\Models\Backend\Designation::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->foreignIdFor(App\Models\Backend\Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->enum('gendar',['Male','Female','Other'])->nullable();
			$table->string('experience')->nullable();
			$table->foreignIdFor(App\Models\Backend\Degree::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->foreignIdFor(App\Models\Backend\ConsultantType::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->foreignIdFor(App\Models\Backend\Chamber::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->foreignIdFor(App\Models\Backend\District::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->text('other_info')->nullable();
            $table->unsignedBigInteger('serial');
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
