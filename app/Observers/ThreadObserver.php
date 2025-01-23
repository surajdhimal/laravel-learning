<?php

namespace App\Observers;

use App\Models\Thread;
use Illuminate\Support\Str;

class ThreadObserver
{
    public function retrieved(Thread $thread): void
    {
        $thread->increment("counter");
    }
    /**
     * Handle the Thread "created" event.
     */
    public function created(Thread $thread): void
    {
        //
    }

    public function saving(Thread $thread): void
    {
        $thread->slug = Str::slug($thread->title, "-");
    }

    /**
     * Handle the Thread "updated" event.
     */
    public function updated(Thread $thread): void
    {
        //
    }

    /**
     * Handle the Thread "deleted" event.
     */
    public function deleted(Thread $thread): void
    {
        //
    }

    /**
     * Handle the Thread "restored" event.
     */
    public function restored(Thread $thread): void
    {
        //
    }

    /**
     * Handle the Thread "force deleted" event.
     */
    public function forceDeleted(Thread $thread): void
    {
        //
    }
}
