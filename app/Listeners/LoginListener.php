<?php

namespace App\Listeners;

use App\Models\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Jenssegers\Agent\Agent;

class LoginListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user_id = $event->user ? $event->user->id : null;

        if ($event->user !== null) {
            $event->user->setCache(config('session.lifetime') * 60);
        }

        $agent = new Agent();

        return Login::create([
            'user_id' => $user_id,
            'ip' => request()->ip(),
            'browser' => $agent->browser() ? $agent->browser() : NULL,
            'system' => $agent->platform() ? $agent->platform() : NULL,
            'device' => $agent->device() ? $agent->device() : NULL,
            'is_mobile' => $agent->isMobile(), // Is Mobile
            'is_tablet' => $agent->isTablet(), // Is Tablet
            'is_desktop' => $agent->isDesktop(), // Is Desktop
        ]);
    }
}
