<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="content">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-6">
                        <div class="card shadow p-5 mb-5 bg-body rounded">
                            <div class="card-body p-3 text-center">
                                <form action="config.php" method="post" enctype="multipart/form-data">
                                    <h3 class="mb-3">Register</h3>
                                    <input type="text"  name="mem_user"  class="form-control my-3" placeholder="username">
                                    <input type="text"  name="mem_pass"  class="form-control my-3" placeholder="password">
                                    <input type="text"  name="mem_name"  class="form-control my-3" placeholder="Name">
                                    <input type="text"  name="mem_last"  class="form-control my-3" placeholder="Last Name">
                                    <input type="email" name="mem_mail"  class="form-control my-3" placeholder="Email">
                                    <input type="tel"   name="mem_phone" class="form-control my-3" placeholder="Phone">
                                    <textarea rows="4" class="form-control my-3" name="mem_address" placeholder="Address"></textarea>
                                    <select name="mem_status" class="form-select my-3">
                                        <option value="user" >User</option>
                                        <option value="rider">Rider</option>
                                        <option value="rest" >Restaurant</option>
                                    </select>
                                    <label>Your Profile</label>
                                    <input type="file" name="file" class="form-control my-3">
                                    <button type="submit" name="submit" value="Upload" class="form-control btn btn-lg btn-success">Sign up</button>
                                    <hr>
                                    <button type="button" class="form-control btn btn-lg btn-primary" onclick="location.href = '../index.php';">Sign in</button>
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