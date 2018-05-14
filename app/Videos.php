<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table= 'videos';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			
    		];

    public function hardware()
	{
		return $this->belongsTo('App\Hardware');
	}
}
