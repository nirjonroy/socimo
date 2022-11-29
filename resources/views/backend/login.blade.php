@extends('master.backend_master.dashboard')

@section('dashboard-body')

<!-- <div class="page-loader" id="page-loader">
	 <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
	  <span>Loading...</span>
  </div> -->
  <!-- page loader -->
<div class="theme-layout gray-bg vh-100">
	
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
                <div class="logo-up">
                    <figure class="logo"><img alt="" src="{{asset('backend/images/logo.png')}}"><span>Socimo</span></figure>
                </div>
                <div class="box">
                    <input type="checkbox" id="toggle" class="box__toggle" hidden>
                    <img src="{{asset('backend/images/resources/login-top.jpg')}}" alt="Picture by Autumn Studio" class="box__image">
                    <form class="form form--register">
						<span>

<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></span>
                        <h1 class="form__title">Sign up</h1>
                        <div class="form__helper">
                            <input type="text" name="user" id="new-user" placeholder="User" class="form__input" />
                            <label class="form__label" for="new-user">User</label>
                        </div>
                        <div class="form__helper">
                            <input type="email" name="email" id="email" placeholder="Email" class="form__input" />
                            <label class="form__label" for="email">Email</label>
                        </div>
                        <div class="form__helper">
                            <input type="password" name="password" id="new-user-password" placeholder="Password" class="form__input" />
                            <label class="form__label" for="new-user-password">Password</label>
                        </div>
                        <div class="form__helper">
                            <input type="password" name="password" id="confirm-password" Placeholder="Confirm password" class="form__input" />
                            <label class="form__label" for="confirm-password">Confirm password</label>
                        </div>
                        <button type="submit" class="form__button">Register</button>
                        <p class="form__text">Already have an account?
                            <label for="toggle" class="form__link">Sign in!</label>
                        </p>
                    </form>
                    <form class="form form--login">
						<span><svg id="login" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
                        <h1 class="form__title">Sign in</h1>
                        <div class="form__helper">
                            <input type="text" name="user" id="user" placeholder="User" class="form__input" />
                            <label class="form__label" for="user">User</label>
                        </div>
                        <div class="form__helper">
                            <input type="password" name="password" id="password" placeholder="Password" class="form__input" />
                            <label class="form__label" for="password">Password</label>
                        </div>
                        <button type="submit" class="form__button">Login</button>
                        <p class="form__text">Don't have an account?
                            <label for="toggle" class="form__link">Sign up!</label>
                        </p>
                    </form>
                </div>
            </div>
		</div>
	</div>
	
	<figure class="bottom-mockup"><img alt="" src="images/footer.png"></figure>
	
	
</div>
@endsection