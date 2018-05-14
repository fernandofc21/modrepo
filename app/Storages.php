<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storages extends Model
{
    protected $table= 'storages';
    protected $primaryKey='ID';
    public $timestamps=false;

    protected  $fillable=[
    			'MANUFACTURER',
    			'NAME',
    			'MODEL',
    			'DESCRIPTION',
    			'TYPE',
    			'DISKSIZE',
    			'SERIALNUMBER',
    			'FIRMWARE'
			];
			
	public function hardware()
	{
		return $this->belongsTo('App\Hardware');
	}
}
