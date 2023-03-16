<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
	{{-- Container --}}
	<div class="container w-25 m-auto mt-4">
		<h2 class="text-center">Registration Page</h2>
		<hr>
		<form>
			{{-- Full Name --}}
			<div class="mb-3">
				<label for="full_name" class="form-label">Full Name</label>
				<input type="text" class="form-control" id="full_name" placeholder="Damenjo Sitepu">
			</div>
			{{-- Email --}}
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" id="email" placeholder="damenjo@example.com">
			</div>
			{{-- Username --}}
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control" id="username" placeholder="damenjoSitepu">
			</div>
			{{-- Password --}}
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" id="password" placeholder="*******">
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