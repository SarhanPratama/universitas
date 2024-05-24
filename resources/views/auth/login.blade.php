<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form  method="POST" action="{{ route('register') }}">
            @csrf

			<h1>Create Account</h1>
			{{-- <span>or use your email for registration</span> --}}
			<input id="name" placeholder="Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

			<input  id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

			<input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <input id="password_confirmation" placeholder="Confirm Password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form  method="POST" action="{{ route('login') }}">
            @csrf
			<h1>Sign in</h1>
		
			<input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
			<input  id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" >
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 text-end" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
             @endif
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>

<script src="{{ asset('assets/js.js') }}"></script>