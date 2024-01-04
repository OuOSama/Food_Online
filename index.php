<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Online</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <div class="content">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-6">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body p-5 text-center">
                                <form action="login.php" method="post">
                                    <h3 class="mb-5">Food Online</h3>
                                    <input type="text" name="mem_user" class="form-control my-4" placeholder="Username">
                                    <input type="text" name="mem_pass" class="form-control my-4" placeholder="Password">
                                    <button type="submit" class="form-control btn btn-lg btn-primary">Login</button>
                                    <hr>
                                    <button type="button" class="form-control btn btn-lg btn-danger" onclick="location.href = 'register/register.php';">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>