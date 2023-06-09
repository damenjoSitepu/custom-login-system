<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLS | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
	
	{{-- Navbar --}}
	<nav class="container navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">{{ isset($user->userFullName) ? $user->userFullName ?: "Not Authenticated" : "Not Authenticated" }}</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
				<a class="nav-link" href="{{ route('auth.logout.step-out') }}">Logout</a>
			</div>
			</div>
		</div>
	</nav>
	{{-- End Of Navbar --}}

	{{-- Container --}}
	<div class="container w-100 m-auto mt-4">
		{{-- Message Area --}}
		@if (Session::has(config('message.stat.fail')))
			<div class="alert alert-danger">
				<p>{{ Session::get(config('message.stat.fail')) }}</p>
			</div>
		@endif 

		@if (Session::has(config('message.status.success')))
			<div class="bg-primary text-light rounded shadow-lg p-3">
				<h4>{{ Session::get(config('message.status.success')) }}</h4>
			</div>
		@endif 
	</div>
	{{-- End Of Container --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>