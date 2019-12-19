<?php

namespace Display\Time;
use Carbon\Carbon;
class Time
{

    public function TimeDisplay($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }

}