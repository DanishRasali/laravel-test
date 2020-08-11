@extends('layouts.header')

@section('content')
<div class="flex-center position-ref full-height">
	<div class="content">
		<div class="login-box">
		  <div class="login-logo">
			<a href="/" style="color: #fff  !important;"><b>Login</b></a>
		  </div>
		  <!-- /.login-logo -->
		  <div class="card">
			<div class="card-body login-card-body">
			  <p class="login-box-msg">Sign in to start your session</p>

			  <form method="POST" action="{{ route('login') }}">
                @csrf
				<div class="input-group mb-3">
				  <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
				  <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
				<div class="row">
				  <div class="col-8">
					<p class="mb-0">
						Need an account?
					</p>
					<p class="mb-0">
					  <a href="register" style="color: #03a1a4  !important;">Register a new membership</a>
					</p>
				  </div>
				  <div class="col-4">
					<button type="submit" class="btn btn-primary btn-block" style="background: #03a1a4  !important;">Sign In</button>
				  </div>
				</div>
			  </form>
			  
			</div>
			<!-- /.login-card-body -->
		  </div>
		</div>
		<!-- /.login-box -->
	</div>
</div>
@endsection
