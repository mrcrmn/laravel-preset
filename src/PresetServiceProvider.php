<?php

namespace mrcrmn\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class PresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('mrcrmn', function ($command) {
            Preset::install();

            $command->info('Scaffolding installed successfully.');
        });
    }
}
