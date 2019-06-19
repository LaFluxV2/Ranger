<?php

namespace ExtensionsValley\Ranger;

use Illuminate\Support\ServiceProvider;

class RangerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'Basetheme');

        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/template/extensionsvalley/ranger')
        ]);


        $this->publishes([
            __DIR__ . '/../public' => public_path('template/extensionsvalley/ranger'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Catching up the events
        foreach (new \DirectoryIterator(__DIR__ . '/Events/') as $fileInfo) {
            if (!$fileInfo->isDot()) {
                include __DIR__ . '/Events/' . $fileInfo->getFilename();
            }
        }
    }
}
