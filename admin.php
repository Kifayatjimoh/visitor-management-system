 <!DOCTYPE html>
<html>
<head>
  <title>Admin Form </title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Admin Login <span class="mx-3">OR</span><a href="index.php" class="btn btn-secondary btn-md mx-3 " tabindex="-1" role="button" >sign in as user</a></h3>
          </div>
          <div class="card-body">
            <form action="admin_info.php" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="firstname" required>
                
              </div>
              <!-- <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div> -->
              <button name="login" type="submit" class="btn btn-primary btn-block mt-4">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

</body>
</html>