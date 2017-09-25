@if (Route::has('login'))
	<div class="nav nav-bar">
	    @auth
	        <a href="{{ url('/') }}">Home</a>
	    @else
	        <a href="{{ route('about') }}">About</a>
	        <a href="{{ route('contact') }}">Contact</a>
	    @endauth
	</div>
@endif