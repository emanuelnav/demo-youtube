<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name')
                ->nullable(false);
            $table->string('description')
                ->nullable(false);
            $table->float('duration')
                ->nullable();
            $table->string('youtube_url')
                ->nullable(false);
            $table->string('youtube_thumbnail')
                ->nullable();
            $table->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->nullable(false);
            $table->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
