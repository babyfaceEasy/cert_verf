<?php
//https://www.youtube.com/watch?v=0QzsBbtnRAg
//https://www.youtube.com/watch?v=iaTzRmSCJ6w
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('matric_no')->unique();
            $table->string('class', 4);
            $table->string('checker');
            $table->string('dept');
            $table->string('year');
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
        Schema::dropIfExists('certifications');
    }
}
