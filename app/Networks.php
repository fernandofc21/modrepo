<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Networks extends Model
{
    protected $table= 'networks';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			
    		];



    public function hardware()
	{
		return $this->belongsTo('App\Hardware');
	}
}
