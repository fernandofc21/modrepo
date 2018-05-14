<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade as PDF;

class Hardware extends Model
{
    protected $table= 'hardware';
    protected $primaryKey='ID';

    protected  $fillable=[
    			'DEVICEID',
    			'NAME',
    			'WORKGROUP',
    			'USERDOMAIN',
    			'OSNAME',
    			'OSVERSION',
    			'OSCOMMENTS',
    			'PROCESSORT',
    			'PROCESSORS',
    			'PROCESSORN',
    			'MEMORY',
    			'SWAP',
    			'IPADDR',
    			'DNS',
    			'DEFAULTGATEWAY',
    			'ETIME',
    			'LASTDATE',
    			'LASTCOME',
    			'QUALITY',
    			'FIDELITY',
    			'USERID',
    			'TYPE',
    			'DESCRIPTION',
    			'WINCOMPANY',
    			'WINOWNER',
    			'WINPRODID',
    			'WINPRODKEY',
    			'USERAGENT',
    			'CHECKSUM',
    			'SSTATE',
    			'IPSRC',
    			'UUID'
			];
			
	public function storages()
	{
		return $this->hasMany('App\Storages', 'HARDWARE_ID');
	}

    public function drives()
    {
        return $this->hasMany('App\Drives', 'HARDWARE_ID');
    }

    public function monitors()
    {
        return $this->hasMany('App\Monitors', 'HARDWARE_ID');
    }

    public function inputs()
    {
        return $this->hasMany('App\Inputs', 'HARDWARE_ID');
    }

    public function networks()
    {
        return $this->hasMany('App\Networks', 'HARDWARE_ID');
    }

    public function ports()
    {
        return $this->hasMany('App\Ports', 'HARDWARE_ID');
    }

    public function printers()
    {
        return $this->hasMany('App\Printers', 'HARDWARE_ID');
    }

    public function softwares()
    {
        return $this->hasMany('App\Softwares', 'HARDWARE_ID');
    }

    public function videos()
    {
        return $this->hasMany('App\Videos', 'HARDWARE_ID');
    }

}
