<?php

namespace App\Observers;

use App\Models\Book;

class BookObserver
{
    /**
     * Handle the Book "created" event.
     *
     * @return void
     */
    public function created(Book $book)
    {
        //
    }

    /**
     * Handle the Book "updated" event.
     *
     * @return void
     */
    public function updated(Book $book)
    {
        $picture = $book->getOriginal()['picture'];
        $file = $book->getOriginal()['file'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }
        if (file_exists(public_path($file))) {
            unlink(public_path($file));
        }
    }

    /**
     * Handle the Book "deleted" event.
     *
     * @return void
     */
    public function deleted(Book $book)
    {
        $picture = $book->getOriginal()['picture'];
        $file = $book->getOriginal()['file'];
        if (file_exists(public_path($picture))) {
            unlink(public_path($picture));
        }
        if (file_exists(public_path($file))) {
            unlink(public_path($file));
        }
    }

    /**
     * Handle the Book "restored" event.
     *
     * @return void
     */
    public function restored(Book $book)
    {
        //
    }

    /**
     * Handle the Book "force deleted" event.
     *
     * @return void
     */
    public function forceDeleted(Book $book)
    {
        //
    }
}