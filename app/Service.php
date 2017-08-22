<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Service extends Model
{
    protected $table = 'service';

    public function counterData()
    {
        return $this->hasMany(CounterData::class,'dev_addr','dev_addr');
    }

    public function counterDataThisMonth()
    {
        return $this->hasMany(CounterData::class,'dev_addr','dev_addr')->whereBetween('rx_time',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()]);
    }

    public function lastCounterData()
    {
        return $this->counterData()->orderBy('rx_time','desc')->first();
    }

    public function notNullCounterDataTotae1()
    {
        return $this->counterData()->whereNotNull('totae1')->orderBy('rx_time','desc')->first();
    }

    public function notNullCounterDataTotae2()
    {
        return $this->counterData()->whereNotNull('totae2')->orderBy('rx_time','desc')->first();
    }
    public function notNullCounterDataTotae3()
    {
        return $this->counterData()->whereNotNull('totae3')->orderBy('rx_time','desc')->first();
    }
}
