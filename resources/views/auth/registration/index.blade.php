<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLS | Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
	{{-- Container --}}
	<div class="container w-25 m-auto mt-4">
		<h2 class="text-center">Registration Page</h2>
		<hr>

		{{-- Success Message --}}
		@if (Session::has(config('message.status.success')))
			<div class="alert alert-success">
				<p>{{ Session::get(config('message.status.success')) }}</p>
			</div>
		@endif

		{{-- Fail Message --}}
		@if (Session::has(config('message.status.fail')))
			<div class="alert alert-danger">
				<p>{{ Session::get(config('message.status.fail')) }}</p>
			</div>
		@endif

		<form action="{{ route('auth.registration.establish') }}" method="POST">
			@csrf
			{{-- Full Name --}}
			<div class="mb-3">
				<label for="full_name" class="form-label">Full Name</label>
				<input type="text" value="{{ old('full_name') }}" name="full_name" class="form-control" id="full_name" placeholder="Damenjo Sitepu">
				<small class="text-danger mt-2 d-block">@error('full_name') {{ $message }} @enderror</small>
			</div>
			{{-- Email --}}
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="damenjo@example.com">
				<small class="text-danger mt-2 d-block">@error('email') {{ $message }} @enderror</small>
			</div>
			{{-- Username --}}
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" value="{{ old('username') }}" name="username" class="form-control" id="username" placeholder="damenjoSitepu">
				<small class="text-danger mt-2 d-block">@error('username') {{ $message }} @enderror</small>
			</div>
			{{-- Password --}}
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password" placeholder="*******">
				<small class="text-danger mt-2 d-block">@error('password') {{ $message }} @enderror</small>
			</div>

			<button class="btn btn-block btn-primary w-50 d-block m-auto">Register</button>
		</form>
		<hr>
		{{-- Link Redirect To Login Page --}}
		<a class="d-block text-center fs-6 text-secondary" href="{{ route('auth.login.view') }}">Already Have An Account? Login Here...</a>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>