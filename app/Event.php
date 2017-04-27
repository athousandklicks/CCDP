<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Event extends Model
{

	//set all the dates to format to use carbon
	protected $dates = ['date', 'end_date'];


//set all dates to be inserted as carbon before going into the database
    public function setDateAttribute($date)
    {
    	$this->attributes['date'] = Carbon::parse($date);
    }

    public function setEnd_dateAttribute($date)
    {
    	$this->attributes['end_date'] = Carbon::parse($date);
    }


}
