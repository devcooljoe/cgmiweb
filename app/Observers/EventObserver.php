<?php

namespace App\Observers;

use App\Models\Event;

class EventObserver
{
    /**
     * Handle the Event "created" event.
     *
     * @return void
     */
    public function created(Event $event)
    {
        //
    }

    /**
     * Handle the Event "updated" event.
     *
     * @return void
     */
    public function updated(Event $event)
    {
        $picture = $event->getOriginal()['picture'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }

    }

    /**
     * Handle the Event "deleted" event.
     *
     * @return void
     */
    public function deleted(Event $event)
    {
        $picture = $event->getOriginal()['picture'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }
    }

    /**
     * Handle the Event "restored" event.
     *
     * @return void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the Event "force deleted" event.
     *
     * @return void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
