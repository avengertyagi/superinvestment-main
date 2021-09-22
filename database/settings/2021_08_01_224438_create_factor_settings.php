<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateFactorSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('factors.superinvest', 1.36775);
        $this->migrator->add('factors.cbonds', 1.27729);
        $this->migrator->add('factors.ppfs', 1.22848);
        $this->migrator->add('factors.fds', 1.17424);

    }
}
