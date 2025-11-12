<!DOCTYPE html>
<html lang="en">
<!-- MAXnana -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-light">
    <!-- Content Here -->
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto border-0">
                <div class="card-header bg-white  py-3">
                    <h1 class="text-center text-primary">LOGIN<i class="fa-solid fa-right-to-bracket"></i></h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">

                        <div class="row mb-3 g-2">
                            <label for="username" class="col-md-3 py-2 form-label small">USERNAME</label>
                            <div class="col">
                                <input type="text" name="username" id="username" class="form-control mb-2" required
                                    autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 g-2">
                            <label for="" class="col-md-3 py-2 form-label small">PASSWORD</label>
                            <div class="col">
                                <input type="password" name="password" id="password" class="form-control mb-5">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                    </form>

                    <p class="text-center mt-3">
                        <a href="register.php" class="bg-danger text-white d-inline-block small"
                            style="text-decoration: none; padding: 2px 8px; border-radius: 5px">Create an Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>