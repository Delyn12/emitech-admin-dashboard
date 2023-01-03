<?php
namespace Emitech\Dashboard\Facades;

use Illuminate\Support\Facades\Facade;


class BaseDashboardFacades extends Facade
{
	
	public static function getFacadeAccessor()
	{
		return 'dashboard';
	}
	
}

?>