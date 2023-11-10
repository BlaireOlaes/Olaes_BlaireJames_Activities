<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
         body {
            background-color: #1e1e1e;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        .social-container {
            text-align: center;
        }

        .social {
            color: #fff;
            background-color: #444;
            border: 1px solid #555;
            padding: 10px;
            margin: 5px;
            border-radius: 50%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #444;
            border: 1px solid #555;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
        }

        .form-control:focus {
            background-color: #555;
            border: 1px solid #666;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
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
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1 class="text-center">Create Account</h1>
        <div class="social-container text-center">
        </div>
        <span class="d-block text-center">or use your email for registration</span>
        <div class="form-group">
            <input type="text" name="Name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="Password" class="form-control" placeholder="Password" required>
        </div>
        <a href="{{ route('login')}}" class="d-block mb-3 text-center">Already have an account</a>
        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
