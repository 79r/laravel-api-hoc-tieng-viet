<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('id_ID')->nullable();
            $table->string('vi_VN')->nullable();
            $table->string('en_US')->nullable();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('color_id')->nullable();
            $table->string('icon_name')->nullable();
            $table->string('material_icon_name')->nullable();
            $table->enum('icon_type', ['eva', 'material_icons', 'ant_design'])
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}