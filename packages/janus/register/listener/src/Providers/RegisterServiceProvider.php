<?php

namespace janus\register\src\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use janus\register\src\Jobs\SendMail;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViews();
        Event::listen(Registered::class, function (Registered $event): void
        {
            SendMail::dispatch($event->user);
        });
    }
    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'janus');
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/janus/mail'),
        ]);
    }
}
