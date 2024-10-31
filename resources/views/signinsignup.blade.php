<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
    <title>User Authentication</title>
    <style>
        /* styles.css */

        /* General container styling */
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa; /* Light grey background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        
        /* Styling the nav tabs */
        .nav-tabs .nav-item .nav-link {
            color: #495057; /* Dark grey text color */
            font-weight: bold;
            border: none;
            padding: 10px 20px;
        }
        
        .nav-tabs .nav-item .nav-link.active {
            background-color: #007bff; /* Primary color for active tab */
            color: #fff; /* White text */
            border-radius: 4px;
        }
        
        /* Styling the forms */
        .form-group label {
            font-weight: 500;
            color: #333;
        }
        
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
            transition: box-shadow 0.2s;
        }
        
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Blue shadow on focus */
            border-color: #007bff; /* Blue border on focus */
        }
        
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.2s;
        }
        
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        

    </style>
</head>
<body>
    <div class="container mt-5">
        <ul class="nav nav-tabs" id="authTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab">Sign Up</a>
            </li>
        </ul>
        <div class="tab-content" id="authTabContent">
            <!-- Sign-In Form -->
            <div class="tab-pane fade show active" id="login" role="tabpanel">
                <form class="mt-3">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="loginEmail">Email or Phone Number</label>
                        <input type="text" class="form-control" id="loginEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
            <!-- Sign-Up Form -->
            <div class="tab-pane fade" id="register" role="tabpanel">
                <form class="mt-3">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <input type="email" class="form-control" id="registerEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="registerPhone">Phone Number</label>
                        <input type="tel" class="form-control" id="registerPhone" required>
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" id="registerPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="userRole">Select Role</label>
                        <select class="form-control" id="userRole" required>
                            <option value="">Choose role...</option>
                            <option value="admin">Admin</option>
                            <option value="attendee">Attendee</option>
                            <option value="volunteer">Volunteer</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
