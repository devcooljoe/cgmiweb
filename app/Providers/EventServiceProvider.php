<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\HeroBanner;
use App\Observers\BookObserver;
use App\Observers\EventObserver;
use App\Observers\GalleryObserver;
use App\Observers\HeroBannerObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Book::observe(BookObserver::class);
        Event::observe(EventObserver::class);
        Gallery::observe(GalleryObserver::class);
        HeroBanner::observe(HeroBannerObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}