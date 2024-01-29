<?php

namespace App\Observers;

use App\Models\Gallery;

class GalleryObserver
{
    /**
     * Handle the Gallery "created" event.
     *
     * @return void
     */
    public function created(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "updated" event.
     *
     * @return void
     */
    public function updated(Gallery $gallery)
    {
        $picture = $gallery->getOriginal()['picture'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }
    }

    /**
     * Handle the Gallery "deleted" event.
     *
     * @return void
     */
    public function deleted(Gallery $gallery)
    {
        $picture = $gallery->getOriginal()['picture'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }
    }

    /**
     * Handle the Gallery "restored" event.
     *
     * @return void
     */
    public function restored(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "force deleted" event.
     *
     * @return void
     */
    public function forceDeleted(Gallery $gallery)
    {
        //
    }
}