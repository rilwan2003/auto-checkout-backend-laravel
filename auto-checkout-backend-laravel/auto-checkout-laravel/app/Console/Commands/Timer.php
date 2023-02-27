<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Checkout;

class Timer extends Command
{
    protected $signature = 'timer:start';
    protected $description = 'Calculate time elapsed for checkouts';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();
        $checkouts = Checkout::whereNull('time_elapsed')->get();

        foreach ($checkouts as $checkout) {
            $checkoutTime = Carbon::parse($checkout->created_at);
            $timeElapsed = $now->diffInSeconds($checkoutTime);

            $checkout->update(['time_elapsed' => $timeElapsed]);
        }
    }
}
