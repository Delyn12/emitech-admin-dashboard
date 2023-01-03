<?php
namespace Emitech\Dashboard\Services;
use Emitech\Dashboard\Support\DashboardSupport;
use Config;


class DashboardServices
{
	
	public function logo()
	{
		$logo = new DashboardSupport();
		$path = "/../../Images/Logo medium.png";
		$logo->set_logo_path($path);
		return $logo->get_logo_path();
	
	}
	
	public function favicon()
	{
		$favicon = new DashboardSupport();
		$path = "/../../Images/Logo Icon.png";
		$favicon->set_Adminfavicon_path($path);
		return $favicon->get_Adminfavicon_path();
	
	}
	
	
	
	public function BaseApplicationName()
	{
		$application_name =  config::get('application.name');
		return DashboardSupport::setApplicationName($application_name);
	}
	
	public function AdminBaseLayout()
	{
		return ("DASHBOARD::Layouts.master");
	}
}


?>
