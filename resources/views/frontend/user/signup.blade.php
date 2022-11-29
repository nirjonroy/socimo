@extends('frontend.user.login')

@section('login')
<div class="auth-login">
		<div class="verticle-center">
			<div class="signup-form">
				<h4><i class="icofont-lock"></i> Singup</h4>
				
				<form method="POST" class="c-form" action="{{ route('register') }}">
                        @csrf
					<div class="row merged-10">
						<div class="col-lg-12"><h4>Create an Account in Aizer</h4></div>
						
						<div class="col-lg-6 col-sm-6 col-md-6">
							<label for="Full_name">Full Name</label>
							<input type="text" placeholder="Full Name" name="name" required>
							@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
						<label for="Full_name">Phone Number</label>
							<input type="text" placeholder="Mobile" name="phone" required>
							@error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
						<label for="Full_name">E-mail</label>
							<input type="email" placeholder="Email@" name="email" required>
							@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
						<label for="Full_name">password</label>
							<input type="password" placeholder="Password" name="password" required>
							@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
						<label for="Full_name">Date Of Birth</label>
							<input type="date" placeholder="Date Of Birth" name="DOB" required>
							@error('DOB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="col-lg-12">
							<div class="gender">
							<label for="Full_name">Gender</label>
							  <input type="radio" id="male" name="gender" value="male">
							  <label for="male">Male</label>
							  <input type="radio" id="female" name="gender" value="female">
							  <label for="female">Female</label>
							</div>	
						</div>
						<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Profile Photo</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control @error('name') is-invalid @enderror" name="profilePhoto" required autocomplete="" autofocus>

                                @error('profilePhoto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="col-lg-12">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked required>
								<label for="checkbox"><span>I agree the terms of Services and acknowledge the privacy policy</span></label>
							</div>

							<button class="main-btn" type="submit"><i class="icofont-key"></i> Signup</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection