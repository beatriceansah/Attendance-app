<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile and History</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-card {
            max-width: 400px;
            margin: auto;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .history-list {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">User Profile & Attendance History</h2>

        <!-- Profile Card -->
        <div class="card profile-card shadow p-4 mb-5">
            <div class="text-center">
                <img src="https://via.placeholder.com/100" alt="Profile Picture" class="profile-img">
                
            </div>
        </div>

        <!-- Tabs for Profile Management and Attendance History -->
        <ul class="nav nav-tabs" id="profileTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="manage-profile-tab" data-toggle="tab" href="#manageProfile" role="tab">Manage Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="attendance-history-tab" data-toggle="tab" href="#attendanceHistory" role="tab">Attendance History</a>
            </li>
        </ul>
        <div class="tab-content mt-3" id="profileTabContent">
            <!-- Manage Profile Tab -->
            <div class="tab-pane fade show active" id="manageProfile" role="tabpanel">
                <form id="profileForm" class="mt-3">
                    <div class="form-group">
                        <label for="preferredName">Preferred Name</label>
                        <input type="text" class="form-control" id="preferredName" placeholder="Enter preferred name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="profilePicture">Profile Picture</label>
                        <input type="file" class="form-control-file" id="profilePicture">
                    </div>
                    <div class="form-group">
                        <label for="profileEmail">Email</label>
                        <input type="email" class="form-control" id="profileEmailInput" placeholder="Enter email" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                </form>
            </div>

            <!-- Attendance History Tab -->
            <div class="tab-pane fade" id="attendanceHistory" role="tabpanel">
                <h5 class="mt-3">Attendance History</h5>
                <ul class="list-group history-list" id="attendanceList">
                    <li class="list-group-item">Service on Oct 15, 2024</li>
                    <li class="list-group-item">Bible Study on Oct 10, 2024</li>
                    <li class="list-group-item">Service on Oct 8, 2024</li>
                    <li class="list-group-item">Service on Oct 1, 2024</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Handle Profile Form Submission
        document.getElementById('profileForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Update profile name and email display
            const preferredName = document.getElementById('preferredName').value;
            const profileEmail = document.getElementById('profileEmailInput').value;

            document.getElementById('profileName').textContent = preferredName;
            document.getElementById('profileEmail').textContent = profileEmail;

            alert("Profile updated successfully!");
        });
    </script>
</body>
</html>
