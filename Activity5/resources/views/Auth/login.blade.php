<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
     body {
            background-color: #1e1e1e;
            color: #fff;
        }

        .container {
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .form-control {
            background-color: #444;
            border: 1px solid #555;
            color: #fff;
        }

        .form-control:focus {
            background-color: #555;
            border: 1px solid #666;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .social {
            color: #fff;
            background-color: #444;
            border: 1px solid #555;
        }

        .social:hover {
            color: #fff;
            background-color: #555;
            border: 1px solid #666;
        }

        .invalid-feedback {
            color: #ff6961;
        }

        a {
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
            @csrf
            <h1 class="text-center">Sign in</h1>
            <div class="social-container text-center">
              
            </div>
            <span class="text-center d-block">or use your account</span>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required />
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required />
                <div class="invalid-feedback">Please enter your password.</div>
            </div>
            <a href="{{ route('signup')}}" class="d-block mb-3 text-center">Create Account</a>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
