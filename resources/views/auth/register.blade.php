@extends('layouts.header')

@section('content')
<div class="flex-center position-ref full-height">
	<div class="content">
		<div class="register-box">
		  <div class="register-logo">
			<a href="/" style="color: #fff  !important;"><b>Registration</b></a>
		  </div>

		  <div class="card">
			<div class="card-body register-card-body">
			  <p class="login-box-msg">Register a new membership</p>

		  <form method="POST" action="{{ route('register') }}">
				@csrf
				<div class="input-group mb-3">
				  <input placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
				  <div class="input-group-append">
					<div class="input-group-text">
					  <span class="fas fa-user"></span>
					</div>
				  </div>
				  @error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				  @enderror
				</div> 

				<div class="input-group mb-3">
				  <input placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
				  <div class="input-group-append">
					<div class="input-group-text">
					  <span class="fas fa-envelope"></span>
					</div>
				  </div>
				  @error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				  @enderror
				</div>
				
				<div class="input-group mb-3">
				  <input placeholder="Password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
				  <div class="input-group-append">
					<div class="input-group-text">
					  <span class="fas fa-lock"></span>
					</div>
				  </div>
				  @error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				  @enderror
				</div>
				
				<div class="input-group mb-3">
				  <input placeholder="Confirm Password" name="password_confirmation" type="password" class="form-control" required autocomplete="new-password">
				  <div class="input-group-append">
					<div class="input-group-text">
					  <span class="fas fa-lock"></span>
					</div>
				  </div>
				</div>
				  
				<div class="input-group mb-3">
				  <input placeholder="Phone Number" name="phone_num" type="text" class="form-control @error('phone_num') is-invalid @enderror" required autocomplete="phone_num">
				  <div class="input-group-append">
					<div class="input-group-text">
					  <span class="fas fa-phone"></span>
					</div>
				  </div>
				</div>	
				
				<div class="input-group mb-3">
				  <textarea class="form-control" placeholder="Address" name="address" rows="3"></textarea>
				</div>
				
				<div class="row">
				  <div class="col-8">
					<div class="icheck-primary">
						<input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
					  <label for="agreeTerms">
					   I agree to the <a href="#" style="color: #03a1a4  !important;">terms</a>
					  </label>
					</div>
				  </div>
				  <!-- /.col -->
				  <div class="col-4">
					<button type="submit" class="btn btn-primary btn-block" style="background: #03a1a4  !important;">Register</button>
				  </div>
				  <!-- /.col -->
				</div>
			  </form>


			  <a href="login" class="text-center" style="color: #03a1a4  !important;">I already have a membership</a>
			</div>
			<!-- /.form-box -->
		  </div><!-- /.card -->
		</div>
		<!-- /.register-box -->
	</div>
</div>
@endsection
