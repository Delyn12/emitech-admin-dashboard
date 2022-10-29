<?php
namespace Emitech\Dashboard\Http\Controllers;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
	/* 
	view application pages or
	navigate to a page
	*/
	
	public function index()
	{
		return view ('DASHBOARD::Layouts.master');
	}
}

?>