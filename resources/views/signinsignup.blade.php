<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
    background-color: #f8f9fa;
}

h2 {
    font-weight: bold;
    color: #007bff;
}

.nav-tabs .nav-link {
    font-weight: bold;
    color: #495057;
}

.nav-tabs .nav-link.active {
    background-color: #007bff;
    color: #fff;
}

.form-control {
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Church Attendance App - User Authentication</h2>
        
        <body class="d-flex align-items-center justify-content-center bg-body-secondary min-vh-100">
    <div class="card p-4 shadow-sm" style="width: 24rem;">
      <div class="card-header text-center bg-white border-0">
        <a href="index2.html" class="link-dark text-decoration-none">
          <h1 class="mb-0"><b>Admin</b>LTE</h1>
        </a>
      </div>
      <div class="card-body">
        <p class="text-center text-muted">Sign in to start your session</p>

        <form action="index3.html" method="post">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Email</label>
            <div class="input-group">
              <input
                id="loginEmail"
                type="email"
                class="form-control"
                placeholder="Email"
                required
              />
              <span class="input-group-text">
                <i class="bi bi-envelope"></i>
              </span>
            </div>
          </div>

          <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <div class="input-group">
              <input
                id="loginPassword"
                type="password"
                class="form-control"
                placeholder="Password"
                required
              />
              <span class="input-group-text">
                <i class="bi bi-lock-fill"></i>
              </span>
            </div>
          </div>

          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                id="rememberMe"
              />
              <label class="form-check-label" for="rememberMe">
                Remember Me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
        </form>

        <div class="text-center mb-3">
          <p class="text-muted">- OR -</p>
          <a href="#" class="btn btn-primary w-100 mb-2">
            <i class="bi bi-facebook me-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-danger w-100">
            <i class="bi bi-google me-2"></i> Sign in using Google
          </a>
        </div>

        <div class="text-center">
          <p><a href="forgot-password.html">I forgot my password</a></p>
          <p><a href="register.html" class="text-decoration-none">Register a new membership</a></p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            
            <!-- Sign-Up Form -->
            <div class="tab-pane fade" id="register" role="tabpanel">
                <form>
                    <div class="form-group">
                        <label for="registerFullName">Full Name</label>
                        <input type="text" class="form-control" id="registerFullName" placeholder="Enter your full name" name="fullName">
                    </div>
                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <input type="email" class="form-control" id="registerEmail" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="registerPhone">Phone Number</label>
                        <input type="tel" class="form-control" id="registerPhone" placeholder="Enter phone number" name="PhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" id="registerPassword" placeholder="Enter password" name="Password" >
                    </div>
                    <div class="form-group">
                        <label for="userRole">Select Role</label>
                        <select class="form-control" id="userRole" >
                            <option value="">Choose role...</option>
                            <option value="admin">Admin</option>
                            <option value="attendee">Attendee</option>
                            <option value="volunteer">Volunteer</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
