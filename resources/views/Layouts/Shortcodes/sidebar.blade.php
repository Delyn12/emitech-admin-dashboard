 <div class="sidebar-top">
		<div class="sidebar-logo">
			@if(AdminBaseDashboard::logo())
		<img src="{{ asset(AdminBaseDashboard::logo())}}" alt="{{ AdminBaseDashboard::logo()}}" class="img-fluid">
			@endif
			
		 <div class="ps-info">
		  <h1 class="sidebar-brand">{{ adminBaseDashboard::BaseApplicationName() }}</h1>
		  </div>
		</div>
		 <div class="date-time-wrapper">
		  <h5 class="time-wrapper">
			  <span class="icon"><i class="fa-solid fa-clock"></i></span>
			  <span class="text timer"></span>
			  </h5>
		  <h5 class="date-wrapper">
			  <span class="icon"><i class="fa-solid fa-calendar"></i></span>
			  <span class="text">{{ CURRENT_DATE() }}</span>
			  </h5>
		  </div>
		</div>
		<div class="sidebar-middle">
		<a href="#" class="sidebar-nav-link sidebar-active">
			<span class="icon"><i class="fa-solid fa-gauge"></i></span>
			<span class="text">{{ trans('DASH::dashboard.'.ADMIN_BASE_URL_NAME) }}</span>
			</a>
			<ul class="sidebar-menu">
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 1</span>
				</a>
				</li>
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 2</span>
				</a>
				</li>
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
			</ul>
			<h1 class="sidebar-menu-divider">
			<span class="text">section 2</span>
			<span class="icon"><i class="bi bi-plus-circle"></i></span>
			</h1>
			<ul class="sidebar-menu">
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
			<li class="sidebar-menu-item accordion">
				<button class="accordion-btn" type="button" id="accordion-switch">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</button>
				<div class="sidebar-accordion-body">
				<ul class="accordion-menu">
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					</ul>
				</div>
				</li>
				<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
					<li class="sidebar-menu-item accordion">
				<button class="accordion-btn"  type="button" id="accordion-switch">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</button>
				<div class="sidebar-accordion-body">
				<ul class="accordion-menu">
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					</ul>
				</div>
				</li>
			</ul>
			</ul>
<ul class="sidebar-menu">
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
			<li class="sidebar-menu-item accordion">
				<button class="accordion-btn" type="button" id="accordion-switch">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</button>
				<div class="sidebar-accordion-body">
				<ul class="accordion-menu">
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					</ul>
				</div>
				</li>
				<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
					<li class="sidebar-menu-item accordion">
				<button class="accordion-btn"  type="button" id="accordion-switch">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</button>
				<div class="sidebar-accordion-body">
				<ul class="accordion-menu">
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					<li class="accordion-menu-item">
					<a href="#" class="accordion-menu-link">
						<span class="icon"><i class="bi bi-menu-down"></i></span>
						<span class="text">link 1</span>
						</a>
					</li>
					</ul>
				</div>
				</li>
			</ul>
			</ul>
			<h1 class="sidebar-menu-divider">
			<span class="text">section 3</span>
			<span class="icon"><i class="bi bi-plus-circle"></i></span>
			</h1>
			<ul class="sidebar-menu">
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 1</span>
				</a>
				</li>
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 2</span>
				</a>
				</li>
			<li class="sidebar-menu-item">
				<a href="#" class="sidebar-menu-item-link">
				<span class="icon"><i class="bi bi-menu-down"></i></span>
					<span class="text">link 3</span>
				</a>
				</li>
			</ul>
		</div>
		<div class="sidebar-bottom">
		<div class="text-center">
			<a href="#" class="sidebar-nav-link">
			<span class="icon"><i class="bi bi-box-arrow-right"></i></span>
				<span class="text">{{ trans('DASH::dashboard.'.END_SESSION_URL_NAME) }}</span>
			</a>
			</div>
		</div>