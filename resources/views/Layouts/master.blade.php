{{ View::make('DASHBOARD::Layouts.Partial.ec_header') }}
<section id="page-layout">
  <aside class="sidebar" id="sidebar">
	<div class="sidebar-wrapper">
	 @include('DASHBOARD::Layouts.Shortcodes.sidebar')
	  </div>
	</aside>
	
  <article class="main-page-layout" id="main-page-layout">
	<header class="main-header">
	  <div class="header-wrapper">
		 @include('DASHBOARD::Layouts.Shortcodes.header')
		  </div>
		</div>
	  </header>
	  
    <main class="main-content">
		<div class="main-content-wrapper">
		@yield('content')
		</div>
	  </main>
	  
<footer class="main-footer">
	  <div class="ps-footer-wrapper">
		 @include('DASHBOARD::Layouts.Shortcodes.footer')
		</div>
	  </footer>
  </article>
</section>
	
{{ View::make('DASHBOARD::Layouts.Partial.ec_footer') }}
	