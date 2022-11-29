@extends('frontend.user.login')
@section('login')
<div class="auth-login">
		<div class="logo"><img src="{{asset('frontend/images/logo.png')}}" alt=""><span>Socimo</span></div>
		<div class="mockup left-bottom"><img src="images/mockup.png" alt=""></div>
		<div class="verticle-center">
			<div class="login-form">
				<h4><i class="icofont-key-hole"></i> Login</h4>
				<form method="POST" action="{{ route('login') }}">
                        @csrf
					
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<div class="checkbox">
						<input type="checkbox" id="checkbox" checked>
						<label for="checkbox"><span>Remember Me</span></label>
					</div>
					<button class="main-btn" type="submit"><i class="icofont-key"></i> Login</button>
				</form>
                
                <a href="{{route('user.signup')}}" class="btn btn-warning">Signup</a>
            </div>
		</div>
		<div class="mockup right"><img src="{{asset('frontend/images/star-shape.png')}}" alt=""></div>
	</div>
@endsection