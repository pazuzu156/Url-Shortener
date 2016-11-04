<?php

use Scara\Database\Blueprint;
use Scara\Database\Migration;

class CreateUrlsTable extends Migration
{
    /**
     * For pushing migrations up
     *
     * @return void
     */
    public function up()
    {
        $this->create('urls', function($table)
        {
            // Place table rows here
            $table->increments('id');
            $table->string('urlid');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * For reversing migrations
     *
     * @return void
     */
    public function down()
    {
        // This is for removing the table
        $this->drop('urls');
    }
}
