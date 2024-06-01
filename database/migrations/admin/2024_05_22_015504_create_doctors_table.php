<?php

use App\Models\Admin\Category;
use App\Models\Admin\Chamber;
use App\Models\Admin\ConsultantType;
use App\Models\Admin\Degree;
use App\Models\Admin\Designation;
use App\Models\Admin\District;
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
            $table->foreignIdFor(Designation::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('gendar',['Male','Female','Other']);
            $table->string('Experience')->nullable();
            $table->foreignIdFor(Degree::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(ConsultantType::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Chamber::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(District::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('other_info')->nullable();
            $table->boolean('status')->default(1);
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
