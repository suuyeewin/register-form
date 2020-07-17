<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  </head>
  <body>
            <div class="card">
                <div class="card-body">
                    <h2>Login to admin</h2>
                        <form class="" action="admin-process.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" value=""  required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" value=""  required>
                            </div>
                            <button type="submit" name="btnlogin" class="btn btn-primary">Login</button>
                            <button type="submit" name="btnlogin" class="btn btn-primary"><a href="index.php" style="color:white;">Back</a></button>

                        </form>
                </div>
</div>
            </div>
         </div>

  </body>
  </html>
