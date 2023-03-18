<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
	{{-- Container --}}
	<div class="container w-25 m-auto mt-4">
		<h2 class="text-center">Login Page</h2>
		<hr>
		<form action="{{ route('auth.login.stepin') }}" method="POST">
			@csrf
			{{-- Username --}}
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" name="username" class="form-control" id="username" placeholder="damenjoSitepu">
				<small class="text-danger mt-2 d-block">@error('username') {{ $message }}  @enderror</small>
			</div>
			{{-- Password --}}
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="*******">
				<small class="text-danger mt-2 d-block">@error('password') {{ $message }} @enderror</small>
			</div>

			<button class="btn btn-block btn-primary m-auto d-block w-50">Login</button>
		</form>
		<hr>
		{{-- Link Redirect To Registration Page --}}
		<a class="d-block text-center fs-6 text-secondary" href="{{ route('auth.registration.view') }}">Need Account? Register Here...</a>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>