<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    //
    protected $table = 'ap_states';

    //custom function for avgPrice 
    public function getAvgPriceStateWise()
    {
        $statesAvg = $this->join('ap_copi','ap_states.id','=','ap_copi.state_id')->selectRaw('ap_states.state,AVG(ap_copi.steak) avgSteak,AVG(ap_copi.grnd_beef) avgBeef,AVG(ap_copi.sausage) avgSausage, AVG(ap_copi.fry_chick) avgChicken, AVG(ap_copi.tuna) avgTuna')->groupBy('ap_states.state')->get();
        return $statesAvg;
    }
}
