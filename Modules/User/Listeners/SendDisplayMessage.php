<?php

namespace Modules\User\Listeners;

use Modules\User\Events\DisplayMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SendDisplayMessage
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
     * @param DisplayMessage $event
     * @return void
     */
    public function handle(DisplayMessage $event)
    {
        Log::info('Hello world');
    }
}
