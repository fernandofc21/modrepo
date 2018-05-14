<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drives extends Model
{
    protected $table= 'drives';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			'LETTER',
    			'TYPE',
    			'FILESYSTEM',
    			'TOTAL',
    			'FREE',
    			'NUMFILES',
    			'VOLUMN',
    			'CREATEDATE'
    		];


    public function hardware()
    {
        return $this->belongsTo('App\Hardware');
    }
}
