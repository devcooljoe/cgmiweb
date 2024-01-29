<?php

namespace App\Observers;

use App\Models\HeroBanner;

class HeroBannerObserver
{
    /**
     * Handle the HeroBanner "created" event.
     *
     * @return void
     */
    public function created(HeroBanner $heroBanner)
    {
        //
    }

    /**
     * Handle the HeroBanner "updated" event.
     *
     * @return void
     */
    public function updated(HeroBanner $heroBanner)
    {
        $picture = $heroBanner->getOriginal()['picture'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }
    }

    /**
     * Handle the HeroBanner "deleted" event.
     *
     * @return void
     */
    public function deleted(HeroBanner $heroBanner)
    {
        $picture = $heroBanner->getOriginal()['picture'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }
    }

    /**
     * Handle the HeroBanner "restored" event.
     *
     * @return void
     */
    public function restored(HeroBanner $heroBanner)
    {
        //
    }

    /**
     * Handle the HeroBanner "force deleted" event.
     *
     * @return void
     */
    public function forceDeleted(HeroBanner $heroBanner)
    {
        //
    }
}
