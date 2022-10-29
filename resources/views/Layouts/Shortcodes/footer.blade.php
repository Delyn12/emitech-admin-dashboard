<h1 class="info">
			&#169;{{ __('Copyright of ') }}{{ config('application.name') }}
		<script>document.write(new Date().getFullYear())</script>
				<span class="ms-2">&#174; {{ __('All right reserved.') }}</span>
		  </h1>
		  <div class="info">
			  <h5 class="text"><span class="me-2">{{ config('application.name') }}</span>version : {{ App::VERSION() }}</h5>
			  <h5 class="text"><span class="me-2">{{ __('PHP') }}</span>version : {{ phpversion() }}</h5>
		  </div>