<?php
namespace Emitech\Dashboard\Support;



class DashboardSupport
{
	public $logo;
	
  function __constructor($logo , $favicon)
	{
		$this->logo = $logo;
		$this->favicon = $favicon;
	}
	
	
 public function get_logo_path()
	{
		return $this->logo;
	}
	
	public function set_logo_path($logo)
	{
		$this->logo = $logo;
	}
	
	
	public function set_Adminfavicon_path($fav)
	{
		$this->favicon = $fav;
	}
	
	public function get_Adminfavicon_path()
	{
		return $this->favicon;
	}
	
	
	public static function setApplicationName($name)
	{
		return $name;
	}

}

//$logo = new DashboardSupport();
//
//$logo->set_logo_path("/../../Images/Logo medium.png");
 //return $logo->get_logo_path();

?>
