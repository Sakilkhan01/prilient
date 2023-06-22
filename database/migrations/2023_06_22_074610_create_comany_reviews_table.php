<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComanyReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comany_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('year_in_business');
            $table->string('team_members');
            $table->string('happy_clients');
            $table->string('projects_done');
            $table->string('support_available');
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
        Schema::dropIfExists('comany_reviews');
    }
}
