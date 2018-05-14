<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitors extends Model
{
    protected $table= 'monitors';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			
    		];


   public function hardware()
	{
		return $this->belongsTo('App\Hardware');
	}
}
