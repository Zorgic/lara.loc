<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    //NotNull
    /**
     *
     */
    protected function notNullMeanings()
    {
        foreach (Auth::user()->services as $service):
            $counter1 = $service->lastCounterData();
            $counter1 = $counter1 === null ? 0 : $counter1->counter1;

            $counter2 = $service->lastCounterData();
            $counter2 = $counter2 === null ? 0 : $counter2->counter2;

            $counter3 = $service->lastCounterData();
            $counter3 = $counter3 === null ? 0 : $counter3->counter3;

            $totae1 = $service->notNullCounterDataTotae1();
            $totae1 = $totae1 === null ? 0 : $totae1->$totae1;

            $totae2 = $service->notNullCounterDataTotae2();
            $totae2 = $totae2 === null ? 0 : $totae2->$totae2;

            $totae3 = $service->notNullCounterDataTotae3();
            $totae3 = $totae3 === null ? 0 : $totae3->$totae3;
        endforeach;
    }
}
