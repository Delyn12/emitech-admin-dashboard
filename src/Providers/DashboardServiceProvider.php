<?php
namespace Emitech\Dashboard\Providers;
use Illuminate\Support\ServiceProvider;
use Emitech\Dashboard\Services\DashboardServices;
use AdminBaseDashboard;
use Emitech\Dashboard\Support\DashboardSupport;

class DashboardServiceProvider extends ServiceProvider
{
	/*
	register all application services here
	*/
	public function register()
	{
		$this->app->bind('dashboard', function(){
			return new DashboardServices();
		});
	}
	
	/* 
	Load all system application here such as bootsrap etc
	*/
	
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/../../routes/dashboard.php');
		$this->loadViewsFrom(__DIR__.'/../../resources/views', 'DASHBOARD');
		$this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'DASH');
		  $this->publishes([__DIR__.'/../../config/application.php' => config_path('application.php'),]);
		 $this->publishes([__DIR__.'/../../public' => public_path('vendor/dashboard'),], 'public');
		
		
		
	}
}

?>