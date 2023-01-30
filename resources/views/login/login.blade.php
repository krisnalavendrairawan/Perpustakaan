<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    @if (session()->has('success'))

    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>

    @endif

    @if (session()->has('loginError'))

    <div class="alert alert-danger" role="alert">
      {{ session('loginError') }}
    </div>

    @endif

    <form action="/login" method="POST">
    @csrf
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Site<span>Random</span></div>
		</div>
		<br>
		<div class="login">

				<input type="text" placeholder="username" name="username" id="username" class="@error('username') is-invalid @enderror" required><br>
				<input type="password" placeholder="password" name="password" id="password" class="@error('password') is-invalid @enderror" required><br>
				<button class="w-80 btn btn-md btn-primary mt-3" type="submit">Login</button>
		</div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>