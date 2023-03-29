
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="{{ route('login.submit') }}">
                    @csrf
					<span class="login100-form-title p-b-26">
					STMIK BANDUNG
					</span>
					<span class="login100-form-title p-b-48">
						<img src="https://www.stmik-bandung.ac.id/core/public/assets/img/core-img/logo-title.png" alt="logo_stmik">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@stmik-bandung.ac.id">
						<input class="input100" type="text" name="email" value="{{ old('email') }}">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
    
