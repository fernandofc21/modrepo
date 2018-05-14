<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Softwares extends Model
{
    protected $table= 'softwares';
    protected $primaryKey='HARDWARE_ID';
    public $timestamps=false;

    protected  $fillable=[
    			'PUBLISHER',
    			'NAME',
    			'VERSION',
    			'FOLDER',
                'COMMENTS',
                'FILENAME',
                'FILESIZE',
                'SOURCE',
                'GUID',
                'LANGUAGE',
                'INSTALLDATE',
                'BITSWIDTH'

    		];

            public function hardware()
    {
        return $this->belongsTo('App\Hardware');
    }
}
