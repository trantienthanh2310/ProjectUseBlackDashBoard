<?php

namespace App\Listeners;

use App\Events\DisplayMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class DisplayMessageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\DisplayMessage  $event
     * @return void
     */
    public function handle(DisplayMessage $event)
    {
        Log::info('Hi fen:' . $event->users->name );
    }
}
