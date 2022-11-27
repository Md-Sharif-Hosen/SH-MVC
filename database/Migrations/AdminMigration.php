<?php
include_once(realpath('database/Settings/Blueprint.php'));
include_once(realpath('database/Settings/DBSchema.php'));
class AdminMigration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->status();
            $table->timestamp();
        });
    }
}
