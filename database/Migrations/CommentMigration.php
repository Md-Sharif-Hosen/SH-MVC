<?php
include_once(realpath('Database/Settings/Blueprint.php'));
include_once(realpath('Database/Settings/DBSchema.php'));

class CommentMigration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('view')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('title', 50)->nullable();
            $table->text('description')->nullable();
            $table->status();
            $table->timestamp();
        });
    }
}
