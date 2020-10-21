<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->string('id', 10)->primary()->unique();
            $table->foreign('id')
                ->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('eps_id')->unsigned();
            $table->foreign('eps_id')
                ->references('id')->on('eps')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('user');
            $table->foreign('user')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->dropForeign('officials_persons_id_foreign');
            $table->dropForeign('officials_eps_id_foreign');
            $table->dropForeign('officials_users_id_foreign');
        });
    }
}
