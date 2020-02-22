<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\States;


class AvgPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'display:avgPrice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Displays average price of States';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //fetch data from model
        $this->line("Average Prices:");
        //php artisan display:avgPrice
        $states = new States();
        $statesAvg = $states->getAvgPriceStateWise();
        
        $returnData='';
        $statesAvg->each(function($stateAvg)
        {
            $this->line($stateAvg->state.': Steak('.round($stateAvg->avgSteak,2).'), Ground Beef ('.round($stateAvg->avgBeef,2).'), Sausage ('.round($stateAvg->avgSausage,2).'), Fried Chicken ('.round($stateAvg->avgChicken,2).'), Tuna ('.round($stateAvg->avgTuna,2).')');
        });

    }
}
