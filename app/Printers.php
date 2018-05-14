<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printers extends Model
{
    protected $table= 'printers';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			'NAME',
    			'DRIVER',
    			'PORT',
    			'DESCRIPTION'
    		];


    public function hardware()
	{
		return $this->belongsTo('App\Hardware');
	}
}
