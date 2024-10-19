<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        /* Set a fixed height and width for the card */
        .square-card {
            width: 400px;
            /* Adjust the width as needed */
            height: 400px;
            /* Set the height to make it square */
            margin: auto;
            /* Center the card */
        }

        .card-body {
            border: 1px solid black;
        }
        
    </style>
</head>
<body class="bg-info">
    <div class="container mt-5">
        <!-- Card Start -->
        <div class="card square-card">
            <div class="card-body d-flex flex-column justify-content-center">
                <h1 class="card-title text-center">LOGIN</h1>
                <form action="#" method="POST"> <!-- Ensure the route is correct -->
                    @csrf <!-- CSRF token for security -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" placeholder="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" placeholder="password" name="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button> <!-- Submit button -->
                    </div>
                    <div class="d-flex justify-content-center">
                    <p>Don't have an account? <a href="{{ route('signup') }}">Sign up</a></p>
                    </div>
                    <p>home <a href="{{ route('homm') }}">Homm</a></p>

                </form>
            </div>
        </div>
        <!-- Card End -->
    </div>
</body>

</html>