<?php
include_once(realpath('database/Settings/Blueprint.php'));
include_once(realpath('database/Settings/DBSchema.php'));
class RuleMigration
{
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->status();
            $table->timestamp();
        });
    }
}
