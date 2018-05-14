<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ports extends Model
{
    protected $table= 'ports';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			
    		];


    public function hardware()
	{
		return $this->belongsTo('App\Hardware');
	}			
}
