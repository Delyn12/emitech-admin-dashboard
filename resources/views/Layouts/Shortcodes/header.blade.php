<div class="header-brand">
		  <h1 class="text">
			  <span class="icon" id="hamburger"><i class="fa-solid fa-bars"></i></span>
			<span class="text">{{ trans('DASH::dashboard.'.ADMIN_BASE_URL_NAME) }}</span>
			</h1>
		  </div>
		  <button class="media-toggle" id="header-toggle"><span class="icon"><i class="fa-solid fa-ellipsis-vertical"></i></span></button>
		  <div class="header-right-wrapper" id="header-right-wrapper">
		  <ul class="header-menu">
			  <li class="header-menu-item">
			  <a href="#" class="header-menu-link">
				  <span class="icon"><i class="fa-solid fa-globe"></i></span>
				  <span class="text">{{ trans('DASH::dashboard.'.FRONT_END_URL_NAME) }}</span>
				  </a>
			  </li>
			  <li class="header-menu-item">
			  <a href="#" class="header-menu-link">
				  <span class="icon"><i class="fa-solid fa-language"></i></span>
				  <span class="text">{{ trans('DASH::dashboard.'.LANGUAGE_NAME) }}</span>
				  </a>
			  </li>
			  <li class="header-menu-item">
			  <a href="#" class="header-menu-link">
				  <span class="icon"><i class="fa-solid fa-envelope"></i></span>
				  <span class="text">{{ trans('DASH::dashboard.'.INCOMING_MESSAGES_NAME) }}</span>
				  </a>
			  </li>
			  <li class="header-menu-item">
			  <a href="#" class="header-menu-link">
				  <span class="icon"><i class="fa-solid fa-palette"></i></span>
				  <span class="text">{{ trans('DASH::dashboard.'.COLOR_CHANGER_NAME) }}</span>
				  </a>
			  </li>
			  <li class="header-menu-item admin-dropdown">
			  <button type="button" class="header-menu-link dropdown-btn" id="account-dropdown">
				  <span class="icon"><img src="{{ asset('/Html images/200 x 200px.jpg')}}" alt="user" class="img-fluid"></span>
				  <span class="text">{{ trans('DASH::dashboard.'.ADMIN_SESSION_USER_NAME) }}</span>
				  </button>
				  <div class="dropdown-item" id="dropdown-item">
				  <ul class="dropdown-menu-list">
					   <li class="dropdown-menu-item">
					  <a href="#" class="dropdown-menu-link">
						  <span class="icon"><i class="fa-solid fa-user"></i></span>
						<span class="text">{{ trans('DASH::dashboard.'.SESSION_PROFILE) }}</span>
						  </a>
					  </li>
					   <li class="dropdown-menu-item">
					  <a href="#" class="dropdown-menu-link">
						  <span class="icon"><i class="fa-solid fa-gear"></i></span>
						<span class="text">{{ trans('DASH::dashboard.'.CHANGES_NAME) }}</span>
						  </a>
					  </li>
					   <li class="dropdown-menu-item">
					  <a href="#" class="dropdown-menu-link">
						  <span class="icon"><i class="fa-solid fa-lock"></i></span>
						<span class="text">{{ trans('DASH::dashboard.'.SECURITY_TOKEN_MANAGEMENT) }}</span>
						  </a>
					  </li>
					  <hr class="custom-header-divider">
					  <li class="dropdown-menu-item">
					  <a href="#" class="dropdown-menu-link">
						  <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
						<span class="text">{{ trans('DASH::dashboard.'.END_SESSION_URL_NAME) }}</span>
						  </a>
					  </li>
					  </ul>
				  </div>
			  </li>
			  </ul>