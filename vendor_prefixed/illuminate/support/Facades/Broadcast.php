<?php
/* This file has been prefixed by <PHP-Prefixer> for "Hello Prefixed World for Joomla" */

namespace PPP\Illuminate\Support\Facades;

use PPP\Illuminate\Contracts\Broadcasting\Factory as BroadcastingFactoryContract;

/**
 * @method static \Illuminate\Broadcasting\Broadcasters\Broadcaster channel(string $channel, callable|string  $callback, array $options = [])
 * @method static mixed auth(\Illuminate\Http\Request $request)
 * @method static void connection($name = null);
 * @method static void routes(array $attributes = null)
 *
 * @see \Illuminate\Contracts\Broadcasting\Factory
 */
class Broadcast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BroadcastingFactoryContract::class;
    }
}