<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    protected $table= 'inputs';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			
    		];

    public function hardware()
	{
		return $this->belongsTo('App\Hardware');
	}
}
