<?php
/* This file has been prefixed by <PHP-Prefixer> for "Hello Prefixed World for Joomla" */

namespace PPP\Illuminate\Support\Testing\Fakes;

use PPP\Illuminate\Bus\PendingBatch;
use PPP\Illuminate\Support\Collection;

class PendingBatchFake extends PendingBatch
{
    /**
     * The fake bus instance.
     *
     * @var \Illuminate\Support\Testing\Fakes\BusFake
     */
    protected $bus;

    /**
     * Create a new pending batch instance.
     *
     * @param  \Illuminate\Support\Testing\Fakes\BusFake  $bus
     * @param  \Illuminate\Support\Collection  $jobs
     * @return void
     */
    public function __construct(BusFake $bus, Collection $jobs)
    {
        $this->bus = $bus;
        $this->jobs = $jobs;
    }

    /**
     * Dispatch the batch.
     *
     * @return \Illuminate\Bus\Batch
     */
    public function dispatch()
    {
        return $this->bus->recordPendingBatch($this);
    }
}
