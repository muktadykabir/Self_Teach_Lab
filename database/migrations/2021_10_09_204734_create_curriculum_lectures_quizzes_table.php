<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumLecturesQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_lectures_quizzes', function (Blueprint $table) {
            $table->integer('lecture_quiz_id', true);
			$table->integer('section_id')->nullable();
			$table->integer('type')->nullable();
			$table->string('title', 100)->nullable();
			$table->text('description')->nullable();
			$table->text('contenttext')->nullable();
			$table->string('media', 100)->nullable();
			$table->integer('media_type')->nullable()->comment('0-video,1-audio,2-document,3-text');
			$table->integer('sort_order')->nullable();
			$table->integer('publish')->default(0);
			$table->text('resources')->nullable();
			$table->dateTime('createdOn');
			$table->dateTime('updatedOn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_lectures_quizzes');
    }
}
